<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 7/4/2016
 * Time: 3:06 PM
 */

header("content-type:text/html;charset=utf-8");

include_once 'upload_func.php';
$fileInfo = $_FILES['myFile'];
$maxSize = 2097152;
$allowExt = array('jpeg', 'jpg', 'png', 'gif', 'wbmp');
$flag = true;
$path = 'imooc';

$new=uploadFile($fileInfo,$maxSize,$allowExt,$flag,$path);
echo $new;