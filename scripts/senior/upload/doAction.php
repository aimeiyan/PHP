<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/5/16
 * Time: 11:00 PM
 */

//$_FILES:文件上传变量
print_r($_FILES);

$fileName = $_FILES['myFile']['name'];
$fileType = $_FILES['myFile']['type'];
$fileTmpName = $_FILES['myFile']['tmp_name'];
$fileError = $_FILES['myFile']['error'];
$fileSize = $_FILES['myFile']['size'];

//将服务器上的临时文件移动到指定的目录下
//move_uploaded_file($fileTmpName, $destination);将服务器上的临时文件移动到指定目录下叫什么名字，移动成功返回true，否则返回false。
//move_uploaded_file($fileTmpName, "uploads/" . $fileName);
//copy($src,$dsc):将文件拷贝到指定目录，拷贝成功返回true，否则返回false
copy($fileTmpName, "uploads/" . $fileName);


?>