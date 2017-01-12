<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<p>PHP 超级全局变量列表: </p>
<p>$GLOBALS </p>
<p>$_SERVER </p>
<p>$_REQUEST</p>
<p>$_POST </p>
<p>$_GET </p>
<p>$_FILES </p>
<p>$_ENV </p>
<p>$_COOKIE </p>
<p>$_SESSION</p>
<br>
<p>$GLOBALS </p>
<p>$GLOBALS 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。 </p>
<p>$GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。 </p>
<?php
$x = 5;
$y = 9;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

?>
<br>
<br>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['HTTP_ACCEPT_CHARSET'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
echo $_SERVER['QUERY_STRING'];
echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['HTTPS'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br>";
echo $_SERVER['PATH_TRANSLATED'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_URI'];
?>
<p>PHP $_REQUEST</p>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Name:<input type="text" name="fname">
    <input type="submit">
</form>
<?php
$name = $_REQUEST['fname'];
echo $name;
?>
</body>
</html>