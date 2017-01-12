<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<p>sort() - 对数组进行升序排列 </p>
<p>rsort() - 对数组进行降序排列 </p>
<p>asort() - 根据关联数组的值，对数组进行升序排列 </p>
<p>ksort() - 根据关联数组的键，对数组进行升序排列 </p>
<p>arsort() - 根据关联数组的值，对数组进行降序排列</p>
<p>krsort() - 根据关联数组的键，对数组进行降序排列</p>

<?php
$color = array("red", "blue", "green");
$number = array(4, 6, 2, 8, 11);
$number1 = array(0, 67, 4, 6, 2, 8, 11);
sort($color);
sort($number);
rsort($number1);

$colorLength = count($color);
$numberLength = count($number);
$number1Length = count($number1);

for ($x = 0; $x < $colorLength; $x++) {
    echo $color[$x];
    echo ",";
}

echo "<br>";

for ($y = 0; $y < $numberLength; $y++) {
    echo $number[$y];
    echo ",";
}

echo "<br>";

for ($z = 0; $z < count($number1); $z++) {
    echo $number1[$z];
    echo ",";
}


$number3 = array("Beijing" => "378", "Tianjin" => "173", "Hangzhou" => "568");
asort($number3);
ksort($number3);
echo "<br>";
echo "<br>";

foreach ($number3 as $x => $x_value) {
    echo "Key=" . $x . ",value=" . $x_value;
    echo "<br>";
}

?>
</body>
</html>