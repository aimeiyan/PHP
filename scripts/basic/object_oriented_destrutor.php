<html>
<head>
    <meta charset="UTF-8">
    <title>面向对象</title>
</head>
<body>
<?php

class MyDestructableClass
{
    function __construct()
    {
        print "构造函数" . "<br>";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "销毁" . $this->name . "<br>";
    }
}

$object = new MyDestructableClass();

?>
</body>
</html>