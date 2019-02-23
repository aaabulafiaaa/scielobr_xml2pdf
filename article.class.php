<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class article {
	public $journal = array();	
	public $issue = array();
	public $authors = array();
	public $article = array();	
	protected $xml;

	public function __construct($xml) {
		$this->xml = simplexml_load_string($xml, NULL, LIBXML_NOCDATA);
		// journal metadata
		$this->journal = array(
			"id" => (string) $this->xml->front->{'journal-meta'}->{'journal-id'},
			"name" => array((string) $this->xml->front->{'journal-meta'}->{'journal-title-group'}->{'journal-title'},(string) $this->xml->front->{'journal-meta'}->{'journal-title-group'}->{'abbrev-journal-title'}),
			"issn" => (string) $this->xml->front->{'journal-meta'}->issn,
			"publisher" => (string) $this->xml->front->{'journal-meta'}->publisher->{'publisher-name'}
		);
		// authors metadata
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
		// issue metadata
		$this->issue = array(
			"pub_season" => (string) $this->xml->front->{'article-meta'}->{'pub-date'}[0]->season,
			"pub_year" => (int) $this->xml->front->{'article-meta'}->{'pub-date'}[0]->year,
			"volume" => (int) $this->xml->front->{'article-meta'}->volume,
			"issue" => (int) $this->xml->front->{'article-meta'}->issue
		);
		// article metadata
		$this->article["metadata"] = array(
			"doi" => (string) $this->xml->front->{'article-meta'}->{'article-id'}[0],
			"title" =>  (string) $this->xml->front->{'article-meta'}->{'title-group'}->{'article-title'}
		);
	}


}

$artigo = json_decode(json_encode(new article(file_get_contents("artigo2.xml"))));
echo "<pre>";
var_dump($artigo);
echo "</pre>";
?>

