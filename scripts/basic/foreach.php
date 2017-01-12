<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$arr = array("one", "two", "three");

foreach ($arr as $value1) {
    echo "the value is " . $value1 . "<br>";
}

echo "<br>";

foreach ($arr as $arr => $value) {
    echo "the key is " . $arr . ",the value is " . $value . "<br>";
}

?>

</body>
</html>