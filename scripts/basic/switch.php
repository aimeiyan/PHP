<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<?php
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "your favorite color is red";
        break;
    case "green":
        echo "your favorite color is green";
        break;
    case "blue":
        echo "your favorite color is blue";
        break;
    default:
        echo "your favorite color is neither red,blue,or green";

}
?>
</body>
</html>