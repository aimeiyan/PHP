<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/15/2016
 * Time: 9:56 AM
 */
//echo "hello";
header('content-type:text/html;charset=utf-8');

//start 索引数组
$fruit = array("apple", "banana", "pear");
$fruit01 = $fruit[0];
$fruit02 = $fruit['0'];
print_r($fruit);
echo "<br>";
print_r($fruit01);
echo "<br>";
print_r($fruit02);

for ($i = 0; $i < 3; $i++) {
    echo '<br>数组第' . $i . "个元素：" . $fruit[$i];
}

foreach ($fruit as $key => $value) {
    echo '<br>' . $key . ":" . $value;
}

echo "<br>";

$arr = array("book");
$arr[1] = "pen";

if (isset($arr)) print_r($arr);

echo "<br>";

$arr1 = array(0 => "ruler");
if (isset($arr1)) print_r($arr1);
//end 索引数组


//start 关联数组

$fruitSet = array(
    "苹果" => "apple",
    "梨" => "pear",
    "菠萝" => "pineapple"
);


echo "<br>";
if (isset($fruitSet)) print_r($fruitSet);
$fruitSet["苹果"] = "pingguo";
echo "<br>";

$fruit03 = $fruitSet["菠萝"];
print_r($fruitSet);
echo "<br>";
print_r($fruit03);


foreach ($fruitSet as $key => $v) {
    echo "<br>水果的键名" . $key . ":" . $v;
}

//end 关联数组

?>