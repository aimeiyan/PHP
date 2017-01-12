<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<?php

echo "PHP 数值数组";
echo "<br>";

$arr = array("BMW", "Volvo", "Toyota");
echo "I like " . $arr[0] . "," . $arr[1] . "," . $arr[2] . ".";
echo "<br>";
$arr1 = array();
$arr1[0] = "Toyato";
$arr1[1] = "BMW";
$arr1[2] = "Volvo";
echo "I like " . $arr1[0] . "," . $arr1[1] . "," . $arr1[2] . ".";
echo "<br>";
echo count($arr1);
echo "<br>";
echo "<br>";
echo "PHP 遍历数字数组";
echo "<br>";
$arr1Length = count($arr1);
for ($x = 0; $x < $arr1Length; $x++) {
    echo $arr1[$x];
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "PHP 关联数组";
echo "<br>";
$arr3 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $arr3['Peter'] . " years old.";

echo "<br>";

$arr4 = array();
$arr4["Mike"] = "89";
$arr4["LiLei"] = "22";
$arr4["John"] = "55";
echo "LiLei is " . $arr4['LiLei'] . " years old.";
echo "<br>";
echo "<br>";

echo "PHP 遍历关联数组";
echo "<br>";

foreach ($arr4 as $x => $x_value) {
    echo "Key=" . $x . ",Value=" . $x_value;
    echo "<br>";

}

?>
</body>
</html>