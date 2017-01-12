<html>
<head>
    <title>PHP 测试</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$x = "hello";
var_dump($x);
echo "<br>";
$x = array(1, 2, 3);
var_dump($x);
echo "<br>";

$x = array("1", "2", "3");
var_dump($x);
echo "<br>";

$x = 8797;
var_dump($x);
echo "<br>";

$x = -243;
var_dump($x);
echo "<br>";

$x = 0x23;
var_dump($x);
echo "<br>";

$x = 023;
var_dump($x);
echo "<br>";


$x = -1.2;
var_dump($x);
echo "<br>";

$x = 1.2;
var_dump($x);
echo "<br>";

$x = 2.4e3;
var_dump($x);
echo "<br>";

$x = 8e-3;
var_dump($x);
echo "<br>";


$x = "走着";
var_dump($x);
echo "<br>";

$x = true;
var_dump($x);
echo "<br>";


$x = null;
var_dump($x);


class Car
{
    var $color;

    function Car($color = "green")
    {
        $this->color = $color; //关键字this就是指向当前对象实例的指针，不指向任何其他对象或类。
    }

    function what_color()
    {
        return $this->color;
    }
}

function print_vars($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

// instantiate one object
$herbie = new Car("white");

// show herbie properties
echo "<br>";
echo "<hr>";
echo "\$herbie: Properties<br>";
print_vars($herbie);
?>
</body>
</html>