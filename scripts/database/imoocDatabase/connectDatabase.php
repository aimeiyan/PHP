<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/20/2016
 * Time: 11:48 AM
 */

header('content-type:text/html;charset=utf-8');

//建立数据库链接
//mysqli_connect(host,user,password,database,port,socket);
//mysqli_connect('localhost','root','123456');   //1、当连接成功时，返回mysql连接标识符；当连接失败时，返回false
$con = mysqli_connect('localhost', 'root', '123456');
if ($con) {
    echo "连接成功";
} else {
    echo "连接失败";
}

echo "<br>";


//mysqli_select_db()   选择数据库，也可以说成切换数据库
if (mysqli_select_db($con, "mydb")) {  //1、当选择成功时，返回true；当选择失败时，返回false
    echo "选择数据库成功";
} else {
    echo "选择数据库失败";
}

mysqli_query($con, "set names 'utf8'");   //设定字符集
//mysqli_query()  执行一条sql语句

//mysqli_query($con, "insert into myguests (firstname,lastname,email) values ('Amy','Yan','amy@uu.com');");
//insert的时候，当插入成功时，返回true，失败时，返回false；

echo "<br>";
$insert_clause = "insert into myguests (firstname,lastname,email) values ('AmyTset','Yan','amy@uu.com');";
if (mysqli_query($con, $insert_clause)) {
    echo "插入成功";
    $uid = mysqli_insert_id($con);
    echo "<br>".$uid;
} else {
    echo mysqli_error();   //如果当sql语句很复杂的时候，可以通过mysqli_error() 定位错误所在。返回上一个MySQL产生的文本错误信息
    echo "插入失败";
}

//mysqli_close() 关闭$con对应的数据库
mysqli_close($con);


echo "<br>";

if (function_exists('mysql_connect')) {
    echo 'Mysql 扩展已经安装';
} else {
    echo 'Mysql 扩展未安装';

}
echo "<br>";

if (function_exists('mysql_connect')) {
    echo 'Mysqli 扩展已经安装';
} else {
    echo 'Mysqli 扩展未安装';

}

?>