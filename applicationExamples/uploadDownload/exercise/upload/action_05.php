<?php

header("content-type:text/html;charset=utf-8");
//print_r($_FILES);
include_once 'upload_multi_func.php';
include_once 'common_func.php';
$files = getFiles();

foreach ($files as $fileInfo) {
    $res = uploadFile($fileInfo);
    echo $res['mes'], '<br>';
    $uploadFiles[] = $res['dest'];
}

$uploadFiles = array_values(array_filter($uploadFiles));
print_r($uploadFiles);
