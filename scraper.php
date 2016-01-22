<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$html = scraperWiki::scrape("http://www.gsmarena.com/samsung_i9300_galaxy_s_iii-4238.php");
//print $html . "\n";

$dom = new simple_html_dom();
$dom->load($html);

foreach($dom->find("div#specs-list tr") as $data)
{
    $tds = $data->find("td");
    $record = array(
        'NAME' => $tds[0]->plaintext, 
        'VALUE' => $tds[1]->plaintext
    );
    print_r($record);
}
?>
