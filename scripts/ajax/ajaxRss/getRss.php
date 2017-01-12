<?php

$q = $_GET["q"];

if ($q == "Google") {
    $xml = "http://news.google.com/news?ned=us&topic=h&output=rss";
} elseif ($q = "MSNBC") {
    $xml = "http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml";
}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

$channel = $xmlDoc->getElementsByTagName("channel")->item(0);
$channel_title = $channel->getElementsByTagName("title")->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName("link")->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName("description")->item(0)->childNodes->item(0)->nodeValue;


echo "<a href='" . $channel_link . "'>" . $channel_title . "</a>";
echo "<br>";
echo "<p>" . $channel_desc . "</p>";

$x = $xmlDoc->getElementsByTagName("item");
for ($i = 0; $i < $x->length; $i++) {
    $item_title = $x->item($i)->getElementsByTagName("title")->item(0)->childNodes->item(0)->nodeValue;
    $item_link = $x->item($i)->getElementsByTagName("title")->item(0)->childNodes->item(0)->nodeValue;
    $item_desc = $x->item($i)->getElementsByTagName("description")->item(0)->childNodes->item(0)->nodeValue;


    echo("<p><a href='" . $item_link
        . "'>" . $item_title . "</a>");
    echo("<br>");
    echo($item_desc . "</p>");

}

?>