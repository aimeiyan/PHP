<?php
/**
 * Created by IntelliJ IDEA.
 * User: YANAM
 * Date: 7/4/2016
 * Time: 1:39 PM
 */

header("content-type:text/html;charset=utf-8");
//print_r($_FILES);

$fileInfo = $_FILES['myFile'];
$filename = $fileInfo['name'];
$tmp_name = $fileInfo['tmp_name'];
$size = $fileInfo['size'];
$error = $fileInfo['error'];
$maxSize = 2097152;
$allowExt = array('jpeg', 'jpg', 'png', 'gif', 'wbmp');
$flag = true;

if ($error == 0) {

    if ($size > $maxSize) {
        exit('上传文件过大');
    }

    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowExt)) {
        exit("非法文件类型");
    }

    if (!is_uploaded_file($tmp_name)) {
        exit('文件不是通过HTTP POST方式上传来的');
    }

    if ($flag) {
        if (!getimagesize($tmp_name)) {
            exit('不是真正图片类型');
        }
    }

    $path = 'uploads';

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
        chmod($path, 0777);
    }

    $uniName = md5(uniqid(microtime(true), true)) . '.' . $ext;
    $destination = $path . '/' . $uniName;

    if (@move_uploaded_file($tmp_name, $destination)) {
        echo '文件上传成功';
    } else {
        echo '文件上传失败';
    }

} else {
    switch ($error) {
        case 1:
            echo '长传文件超过了PHP配置文件中upload_max_filesize';
            break;
        case 2:
            echo '超过了表单MAX_FILE_SIZE限制的大小';
            break;
        case 3:
            echo '文件部分被上传';
            break;
        case 4:
            echo '没有选择上传文件';
            break;
        case 6:
            echo '没有找到临时目录';
            break;
        case 7:
        case 8:
            echo '系统错误';
            break;
    }
}


