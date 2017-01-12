<?php

header('content-type:text/html;charset=utf-8');
require_once 'upload_class.php';

$upload=new UploadFileDemo('myFile','wawa');
$dest=$upload->uploadFile();
echo $dest;
