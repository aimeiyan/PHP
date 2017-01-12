<html>
<head>
    <meta charset="UTF-8">
    <title>包含菜单</title>
</head>
<body>
<p>假设我们有一个定义变量的包含文件（"vars.php"）,这些变量可用在调用文件中;</p>
<br>
<br>
<h1>Welcome to my home page.</h1>
<div class="leftmenu">
    <?php include 'vars.php';
    echo "$car is $color";
    ?>
</div>
<p>Some text.</p>
</body>
</html>

