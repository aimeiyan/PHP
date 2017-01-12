<?php

/**
 * 单文件上传函数封装
 */

//$fileInfo = $_FILES['myFile'];
//$allowExt = array('jpeg', 'jpg', 'png', 'gif', 'wbmp');
//$maxSize = 2097152;
//$flag = true;

function uploadFile($fileInfo, $allowExt = array('jpeg', 'jpg', 'png', 'gif', 'wbmp'), $maxSize = 2097152, $flag = true, $uploadPath = 'uploads')
{
//判断错误号
    if ($fileInfo['error'] > 0) {
        //匹配错误信息
        switch ($fileInfo['error']) {
            case 1:
                $mes = '上传文件超过了PHP配置文件中upload_max_filesize选项的值';
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
                $mes = '系统错误';
                break;
            case 8:
                $mes = '系统错误';
                break;
        }

        exit($mes);
    }

//判断文件的上传类型

    if (!is_array($allowExt)) {
        exit('系统错误');
    }

    $ext = pathinfo($fileInfo['name'], PATHINFO_EXTENSION);
//    $allowExt = array('jpeg', 'jpg', 'png', 'gif', 'wbmp');

    if (!in_array($ext, $allowExt)) {
        exit("非法文件类型");
    }

    //检测上传文件的大小是否符合规范
    //    $maxSize = 2097152;
    if ($fileInfo['size'] > $maxSize) {
        exit("上传文件过大");
    }

    //检测图片是否为真实的图片类型
    if ($flag) {
        if (!getimagesize($fileInfo['tmp_name'])) {
            exit("不是真实的图片类型");
        }
    }

    //检测文件是否通过http post 方式上传的
    if (!is_uploaded_file($fileInfo['tmp_name'])) {
        exit("文件不是通过http post 方式上传的");
    }

    //文件移动
//    $uploadPath = 'uploads';
    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0777, true);
        chmod($uploadPath, 0777);
    }
    $uniName = md5(uniqid(microtime(true), true)) . "." . $ext;
    $destination = $uploadPath . "/" . $uniName;
    if (!@move_uploaded_file($fileInfo["tmp_name"], $destination)) {
        exit("文件移动失败");
    }
//    return array(
//        'newPath' => $destination,
//        'type' => $fileInfo['type'],
//        'size' => $fileInfo['size'],
//        "name" => $fileInfo['name']
//    );

    return $destination;
}

?>