<?php

function uploadFile($fileInfo, $maxSize, $allowExt, $flag, $path)
{
    $filename = $fileInfo['name'];
    $tmp_name = $fileInfo['tmp_name'];
    $size = $fileInfo['size'];
    $error = $fileInfo['error'];

    if ($error > 0) {
        switch ($error) {
            case 1:
                $mes = '长传文件超过了PHP配置文件中upload_max_filesize';
                break;
            case 2:
                $mes = '超过了表单MAX_FILE_SIZE限制的大小';
                break;
            case 3:
                $mes = '文件部分被上传';
                break;
            case 4:
                $mes = '没有选择上传文件';
                break;
            case 6:
                $mes = '没有找到临时目录';
                break;
            case 7:
            case 8:
                $mes = '系统错误';
                break;
        }

        echo($mes);
        return false;
    }

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

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
        chmod($path, 0777);
    }

    $uniName = md5(uniqid(microtime(true), true)) . '.' . $ext;
    $destination = $path . '/' . $uniName;

    if (!@move_uploaded_file($tmp_name, $destination)) {
        echo '文件移动失败';
    }

    return $destination;
}

