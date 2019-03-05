<?php
require('libs/fpdf.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class article extends FPDF {
	public $journal = array();	
	public $issue = array();
	public $authors = array();
	public $article = array();	
	public $xml;

	/* public __construct(string $xml, bool $loadAll), returns $this
	Initializes simplexml object and loads file $xml (if $loadAll true) all this class properties. */

	public function __construct($xml, $loadAll = TRUE) {
		$this->xml = simplexml_load_file($xml, NULL, LIBXML_NOCDATA);
		if($loadAll){
			$this->JournalData();
			$this->AuthorData();
			$this->IssueData();
			$this->ArticleData();
		}	
		return $this;
	}

	/* public JournalData(), returns array $this->journal
	Loads journal metadada into $this->journal
		(string) id
		(array) name (string full, string abbreviation)
		(array) issn (int online, int print)
		(string) publisher
		(array) license (string license type, string license text) */

	public function JournalData(){
		$this->journal = array(
			"id" => (string) $this->xml->front->{'journal-meta'}->{'journal-id'},
			"name" => array((string) $this->xml->front->{'journal-meta'}->{'journal-title-group'}->{'journal-title'},
					(string) $this->xml->front->{'journal-meta'}->{'journal-title-group'}->{'abbrev-journal-title'}),
			"issn" => array(
				"print" => (int) (str_replace("-", "", $this->xml->front->{'journal-meta'}->issn[0])),
				"online" => (int) (str_replace("-", "", $this->xml->front->{'journal-meta'}->issn[1]))),
			"publisher" => (string) $this->xml->front->{'journal-meta'}->publisher->{'publisher-name'},
			"license" => array(
				(string) $this->xml->front->{'article-meta'}->permissions->license->attributes()->{'license-type'},
				(string) $this->xml->front->{'article-meta'}->permissions->license[0]->{'license-p'}[0]
				)
		);
		return $this->journal;
	}
	
	/* public AuthorData(), returns $this->authors
	Loads information about authors, institutions and affiliations and feed them in arrays
		(string) institution
		(string) country
		(string) name1 (first name)
		(string) name2 (surname)
		(string) email
		(string) correspondence (address)
		(int) count (number of authors, for optimization purposes) */
		
	public function AuthorData(){
		$i = 0;
		foreach($this->xml->front->{'article-meta'}->{'contrib-group'}->contrib as $contrib){
			$this->authors[$i] = array(
			"institution" => (string) $this->xml->xpath("//aff[@id='aff{$contrib->xref[0]}']")[0]->institution[0],
			"country" => (string) $this->xml->xpath("//aff[@id='aff{$contrib->xref[0]}']")[0]->country[0],
			"name1" => (string) $contrib->name->{'given-names'},
			"name2" => (string) $contrib->name->surname
		);
		if(count($this->xml->xpath("//corresp[@id='c{$contrib->xref[0]}']")) > 0)
		{
			$this->authors[$i]["email"] = (string) $this->xml->xpath("//corresp[@id='c{$contrib->xref[0]}']")[0]->email;
			$this->authors[$i]["correspondence"] = (string) $this->xml->xpath("//corresp[@id='c{$contrib->xref[0]}']")[0];
		} else
		{
			$this->authors[$i]["email"] = ""; 
		}
		$i++;
		}
		$this->authors["count"] = $i;
		return $this->authors;
	}

	/*  public IssueData() returns $this->issue
	Loads information about the issue the article was published in
		(string) pub_season (Oct-Nov), doesn't handle languages
		(int) pub_year
		(int) volume
		(int) issue */

	public function IssueData(){
		$this->issue = array(
			"pub_season" => (string) $this->xml->front->{'article-meta'}->{'pub-date'}[0]->season,
			"pub_year" => (int) $this->xml->front->{'article-meta'}->{'pub-date'}[0]->year,
			"volume" => (int) $this->xml->front->{'article-meta'}->volume,
			"issue" => (int) $this->xml->front->{'article-meta'}->issue
		);
	}


	/* public ArticleData(), returns $this->article
	Loads article information multiple arrays
		(array) metadata
			(string) doi
			(string) title
			(array) pages ((int) first page, (int) last page)
			(array) funding ((string) funding source, (string) award id)
			(array) history ((int) received, (int) accepted) / UNIX Timestamp, use date() to handle
			(array) keywords

		(array) abstract (inside are all the abstracts and their sections)
			(string) title
			(string) text

		(array) trans_abstract (same as last one), to add: language
			(string) title
			(string) text

		(array) content (actual content, chapters, full text)
			(string) title
			(string) text */

	public function ArticleData(){
		$this->article["metadata"] = array(
			"doi" => (string) $this->xml->front->{'article-meta'}->{'article-id'}[0],
			"title" =>  (string) $this->xml->front->{'article-meta'}->{'title-group'}->{'article-title'},
			"pages" => array(
				(int) $this->xml->front->{'article-meta'}->fpage,
				(int) $this->xml->front->{'article-meta'}->lpage),
			"funding" => array(
				(string) $this->xml->front->{'article-meta'}->{'funding-group'}->{'award-group'}->{'funding-source'},
				(string) $this->xml->front->{'article-meta'}->{'funding-group'}->{'award-group'}->{'award-id'}),
			"history" => array(
					"received" => (int) mktime(0, 0, 0, (int) $this->xml->front->{'article-meta'}->history->date[0]->month, (int) $this->xml->front->{'article-meta'}->history->date[0]->day, (int) $this->xml->front->{'article-meta'}->history->date[0]->year),
					"accepted" => (int) mktime(0, 0, 0, (int) $this->xml->front->{'article-meta'}->history->date[1]->month, (int) $this->xml->front->{'article-meta'}->history->date[1]->day, (int) $this->xml->front->{'article-meta'}->history->date[1]->year)
				),
			"keywords" => (array) $this->xml->front->{'article-meta'}->{'kwd-group'}->kwd
		);

		if(count($this->xml->front->{'article-meta'}->abstract) >= 0) {
		// $this->article["abstract"][] = $this->xml->front->{'article-meta'}->abstract[0];
		$bi=0;
			foreach($this->xml->front->{'article-meta'}->abstract as $abstract)
			{
			$this->article["abstract"][$bi]["title"] = (string) $abstract->title;
				foreach($abstract->sec as $sec)
				{
				$this->article["abstract"][] = array("title" => (string) $sec->title,
				"text" => (string) $sec->p);
				}
			$bi +=1;
			}
		}

		if(count($this->xml->front->{'article-meta'}->{'trans-abstract'}) >= 0) {
		// $this->article["abstract"][] = $this->xml->front->{'article-meta'}->abstract[0];
		$bi_t=0;
			foreach($this->xml->front->{'article-meta'}->{'trans-abstract'} as $abstract)
			{
			$this->article["trans_abstract"][$bi_t]["title"] = (string) $abstract->title;
				foreach($abstract->sec as $sec)
				{
				$this->article["trans_abstract"][] = array("title" => (string) $sec->title,
				"text" => (string) $sec->p);
				}
			$bi_t++;
			}
		}

			$i=0;
		foreach($this->xml->body->sec as $sect)
		{
			if(count($sect->sec) > 1)
			{
				$this->article["content"][$i]["title"] = (string) $sect->title;
				foreach ($sect->sec as $subsect)
				{
					$this->article["content"][$i]["sub"][] = array(
						"title" => (string) $subsect->title,
						"text" => (string) $subsect->p);
				}
			} else
			{
					$this->article["content"][] = array(
                                        	"title" => (string) $sect->title,
                                        	"text" => (string) $sect->p);
			}
			$i++;
		}

		return $this->article;
	}
}

$artigo = new article("artigo2.xml");
echo "<pre>";
var_dump(json_decode(json_encode($artigo)));
echo "<h2> ARTICLE META</h2>";
var_dump($artigo->xml->back->{'ref-list'});
echo "</pre>";
?>

