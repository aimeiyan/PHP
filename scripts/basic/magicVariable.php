<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<?php
echo '这是第 “ ' . __LINE__ . ' ” 行';
echo "<br>";
echo '该文件位于 “ ' . __FILE__ . ' ” ';
echo "<br>";
echo '该文件位于 “ ' . __DIR__ . ' ” ';
echo "<br>";

function test()
{
    echo '函数名为：' . __FUNCTION__ . "<br>";
    echo '函数名为：' . __METHOD__;
}

test();
echo "<br>";

class test
{
    function _print()
    {
        echo '类名为：' . __CLASS__ . "<br>";
        echo '函数名为：' . __FUNCTION__;
    }
}

$t = new test();
$t->_print();


echo "<br>";

class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>
</body>
</html>