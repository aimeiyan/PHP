<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/12/2016
 * Time: 2:02 PM
 */

header('content-type:text/html;charset=utf-8');

include_once 'upload.func.php';

$fileInfo = $_FILES['myFile'];
$allowExt = array('jpeg', 'jpg', 'png', 'gif', 'wbmp');
$maxSize = 2097152;
$flag = true;
$uploadPath = 'imooc';
$newName = uploadFile($fileInfo, $allowExt, $maxSize, $flag, $uploadPath);
echo $newName;
?>