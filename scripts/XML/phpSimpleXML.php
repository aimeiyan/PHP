<meta charset="utf-8">
<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 5/27/2016
 * Time: 2:02 PM
 */

echo "<p>输出变量xml（是 SimpleXMLElement 对象）的键和元素：</p><br>";
$xml = simplexml_load_file("test.xml");
print_r($xml);
echo "<br>";
echo "<br>";
echo "<br>";

echo "输出 XML 文件中每个元素的数据：<br>";
echo "<br>";
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body . "<br>";
echo "<br>";
echo "<br>";
echo "输出每个子节点的元素名称和数据：<br>";
echo $xml->getName() . "<br>";
foreach ($xml->children() as $child) {
    echo $child->getName() . ":" . $child . "<br>";
}

?>