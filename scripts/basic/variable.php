<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>

<?php
$x = 5;  //全局变量
$y = 6;
$z = $x + $y;

$txt = "hello world";
echo $txt;
echo "$txt";
echo "<br>";
echo $z;
echo "<hr>";
function myTest()
{
    $b = 10;  //局部变量
    echo "<p>Test variables inside the function:</p>";
    echo "variable x is :$x";
    echo "<br>";
    echo "Variable b is: $b";
}

myTest();
echo "<hr>";
echo "<p>Test varrables outside the function:</p>";
echo "Variable x is :$x";
echo "<br>";
echo "Variable b is :$b";

echo "<hr>";
function myTest1()
{
    global $x;
    echo "globle x :$x";
}

myTest1();

function myTest2()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest2();
echo "<hr>";
echo "最新的y值：$y";

echo "<hr>";
function myTest3()
{
    static $x = 0;
    echo $x;
    $x++;
}

myTest3();
myTest3();
myTest3();


echo "<hr>";
function myTest4($x)
{
    echo $x;
}

myTest4(5);
echo "<hr>";
echo "This", " string", " was", " made", " with multiple parameters.";

echo "<hr>";
$car = array("volvo", "BMW", "Toyota");
echo "my car is a {$car[1]}";
print "<hr>";
$m = "PHP";
print "my car is a {$car[0]}";
print "<hr>";

print $m;
?>


</body>
</html>