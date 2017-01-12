<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 5/27/2016
 * Time: 1:50 PM
 */

$xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");
print $xmlDoc->saveXML();
print "<br>";
print "<br>";

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
    print $item->nodeName . "=" . $item->nodeValue . "<br>";
}

?>