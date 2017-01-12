<?php
/**
 * 多文件上传函数封装
 * Date: 6/12/2016
 * Time: 4:04 PM
 */

function getFiles()
{
    $i = 0;
    foreach ($_FILES as $file) {
        if (is_string($file['name'])) {
            $files[$i] = $file;
            $i++;
        } elseif (is_array($file['name'])) {
            foreach ($file['name'] as $key => $val) {
                $file[$i]['name'] = $file['name'][$key];
                $file[$i]['type'] = $file['type'][$key];
                $file[$i]['tmp_name'] = $file['tmp_name'][$key];
                $file[$i]['error'] = $file['error'][$key];
                $file[$i]['size'] = $file['size'][$key];
            }
        }
    }
    return $files;
}

?>