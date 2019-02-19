<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$arquivo = simplexml_load_string(file_get_contents("artigo_2.xml"));
// var_dump($arquivo->body->sec[0]->title);

 echo "<p style='text-align: right'>{$arquivo->front->{'journal-meta'}->{'journal-id'}} (ISSN: {$arquivo->front->{'journal-meta'}->issn})</p><h2 style='text-align: center'>{$arquivo->front->{'article-meta'}->{'title-group'}->{'article-title'}[0]}</h2> <h3 style='font-style: italic; text-align: center'>{$arquivo->front->{'article-meta'}->{'title-group'}->{'article-title'}[1]}</h3><br /><br />";

$i = 0; //totally fucked, won't work because authors info are interally referenced
foreach($arquivo->front->{'article-meta'}->{'contrib-group'}->contrib as $contrib){
$institution =  (string) $arquivo->xpath("//aff[@id='aff{$contrib->xref[0]}']")[0]->institution[0];
$country = (string) $arquivo->xpath("//aff[@id='aff{$contrib->xref[0]}']")[0]->country[0];
echo "<b>{$contrib->name->surname} {$contrib->name->{'given-names'}}</b> ({$institution}, {$country})<br />";
$i++;
}

foreach  ($arquivo->body->sec as $sec)
{
        echo "<h1>{$sec->title}</h1>";
        if(count($sec->p) > 0)
        {
                foreach($sec->p as $p)
                {
                        echo "<p>{$p}</p>";
                }
        } else
        {
                echo "<p>{$sec->p}</p>";
        }
} 
?>
