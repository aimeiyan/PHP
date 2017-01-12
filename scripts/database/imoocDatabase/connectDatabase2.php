<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/20/2016
 * Time: 1:42 PM
 */

$link = mysqli_connect("localhost", "root", "123456") or die("数据库连接失败");
mysqli_select_db($link, "mydb");
mysqli_query($link, "set names 'utf8'");
$result = mysqli_query($link, "select * from myguests limit 1");
$row = mysqli_fetch_assoc($result);
print_r($row);