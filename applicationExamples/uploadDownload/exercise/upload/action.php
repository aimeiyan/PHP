<?php
/**
 * Created by IntelliJ IDEA.
 * User: YANAM
 * Date: 7/4/2016
 * Time: 1:39 PM
 */

print_r($_FILES);

$filename=$_FILES['myFile']['name'];
$type=$_FILES['myFile']['type'];
$tmp_name=$_FILES['myFile']['tmp_name'];
$size=$_FILES['myFile']['size'];
$error=$_FILES['myFile']['error'];

$destination="uploads/".$filename;
//move_uploaded_file($tmp_name,$destination);
copy($tmp_name,$destination);