<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/12/2016
 * Time: 3:13 PM
 */

header('content-type:text/html;charset=utf-8');
include_once 'upload.func.php';

foreach ($_FILES as $fileInfo) {
    $files[] = uploadFile($fileInfo);
}

print_r($files);
