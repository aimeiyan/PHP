<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/21/2016
 * Time: 9:55 AM
 */

require_once('../connect.php');

//将传递过来的信息入库，在入库之前对所有的信息校验
//print_r($_POST);

if (!((isset($_POST['title']) && (!empty($_POST['title']))))) {
    echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
}

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();   //获取系统时间

$insertSql = "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
//echo "<br>";
//echo $insertSql;
if(mysqli_query($con,$insertSql)){
    echo "<script>alert('文章发布成功');window.location.href='article.add.php';</script>";
}else{
    echo "<script>alert('文章发布失败');window.location.href='article.add.php';</script>";
}