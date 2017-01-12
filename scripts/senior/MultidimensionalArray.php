<html>
<head>
    <meta charset="utf-8">
    <title>多维数组</title>
</head>
<body>
<?php
//A two-dimensional array
$cars = array(
    array("Volov", 100, 96),
    array("BMW", 60, 59),
    array("Toyato", 110, 110)
);
echo $cars[0][0] . ": Ordered: " . $cars[0][1] . ". Sold:" . $cars[0][2] . "<br>";
echo $cars[1][0] . ": Ordered: " . $cars[1][1] . ". Sold:" . $cars[1][2] . "<br>";
echo $cars[2][0] . ": Ordered: " . $cars[2][1] . ". Sold:" . $cars[2][2] . "<br>";


$families = array(
    "Griffin" => array("Peter", "Lois", "Megan"),
    "Quagmire" => array("Glenn"),
    "Brown" => array("Cleveland", "Loretta", "Junior")
);

echo "Is " . $families['Griffin'][2] . " a part of the Griffin family?";
?>
</body>
</html>