<html>
<head>
    <meta charset="utf-8">

    <title>PHP测试</title>
</head>
<body>
<?php
$t = date("H");
if ($t < "10") {
    echo $t;
    echo "<br>";
    echo "have a good morning";
} else if ($t < "20") {
    echo $t;
    echo "<br>";
    echo "have a good day";

} else {
    echo $t;
    echo "<br>";
    echo "have a good night";
}
?>
</body>
</html>