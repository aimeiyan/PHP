<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<?php
echo "'true' 对变量的大小写不敏感:";
echo "<br>";

define("GREETING", "welcome", true);
echo GREETING;
echo "<br>";
echo greeting;
echo "<br>";
echo "<p>常量是全局变量</p>";
function myTest()
{
    echo greeting;
}

myTest();
?>

</body>
</html>