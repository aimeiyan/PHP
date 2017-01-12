<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/21/2016
 * Time: 9:56 AM
 * 删除文章
 */

require_once('../connect.php');

//$id = $_GET['id'];  // 这样写容易被脚本注入
$id = intval($_GET['id']);  //这样防止脚本注入
$deleteSql = "delete from article where id=$id";
if (mysqli_query($con, $deleteSql)) {
    echo "<script>alert('删除文章成功');window.location.href='article.manage.php';</script>";
} else {
    echo "<script>alert('删除文章失败');window.location.href='article.manage.php';</script>";
}