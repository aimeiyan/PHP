<?php

header("Content-type:text/html;charset=utf8;");
/**
 *
 * mysqli_result()  返回结果集中的一个字段的值
 *
 */

$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,"mydb");
mysqli_query($con,'set names utf8');

$query=mysqli_query($con,'select * from myguests;');
echo mysqli_num_rows($query);
echo "<br>";
echo "<br>";

$query1=mysqli_query($con,'select count(*) from myguests;');
$arr=mysqli_fetch_row($query1);
print_r($arr);
echo "<br>";
echo $arr[0];

//echo mysqli_free_result($query1);
//echo mysqli_store_result($query1);
