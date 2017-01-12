<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<?php
$x = 5;
$y = 10;
$z = "生";
$u = "命";
echo "PHP 算术运算符:";
echo "<br>";
echo "减：" . ($x - $y);
echo "<br>";
echo "加：" . ($x + $y);
echo "<br>";
echo "乘：" . ($x * $y);
echo "<br>";
echo "除：" . ($x / $y);
echo "<br>";
echo "整除：" . ($x % $y);
echo "<br>";
echo "取反：" . (-$x);
echo "<br>";
echo "并置：" . ($z . $u);
echo "<br>";
echo "<br>";
echo "<br>";
echo "PHP 赋值运算符:";
echo "<br>";
echo $x += 10;
echo "<br>";
echo $x -= 5;
echo "<br>";
echo $x *= 5;
echo "<br>";
echo $x /= 5;
echo "<br>";
echo $x %= 5;
echo "<br>";
echo $u .= 5;
echo "<br>";
echo "<br>";
echo "<br>";
echo "PHP 递增递减运算符:";
echo "<br>";

$q = 10;
$t = 3;
echo $q--;
echo "<br>";
echo --$q;
echo "<br>";
echo $t++;
echo "<br>";
echo ++$t;


echo "<br>";
echo "<br>";
echo "<br>";
echo "PHP 比较运算符:";
echo "<br>";

$a = 100;
$b = "100";
$c = 50;
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a !== $b);
echo "<br>";
var_dump($a > $c);
echo "<br>";
var_dump($a < $c);

echo "<br>";
echo "<br>";
echo "<br>";
echo "PHP 数组运算符:";
echo "<br>";
$f = array("a" => "red", "b" => "green");
$g = array("c" => "blue", "d" => "yellow");
$s = $f + $g;

var_dump($s);
echo "<br>";
var_dump($f == $g);
echo "<br>";
var_dump($f === $g);
echo "<br>";
var_dump($f !== $g);
echo "<br>";
var_dump($f != $g);
echo "<br>";
var_dump($f <> $g);
echo "<br>";
echo "<br>";
echo "<br>";
echo "三元运算符";
echo "<br>";
$test = '菜鸟教程';
$username = isset($test) ? $test : "nobody";
echo $username, PHP_EOL;

?>
</body>
</html>