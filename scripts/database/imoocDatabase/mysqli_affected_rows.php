<?php

header("Content-type:text/html;charset=utf8");

/**
 *
 * mysqli_affected_rows() 受影响的记录行数
 * 返回前一次受insert、update、delete影响的记录的行数
 *
 */

//连库、择库、设定字符集
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,"mydb");
mysqli_query($con,"set names utf8");

//发指令、取数据
//$query=mysqli_query($con,'select * from myguests');

//mysql的增删改
//通过mysqli_query向mysql数据库传递insert、update、delete语句

if(mysqli_query($con,'update myguests set lastname="ha22ha" WHERE id=1')){
    echo "修改成功,修改的数据条数为";
    echo mysqli_affected_rows($con);  //当修改的数据和之前一样时，影响的条数为0
}else{
    echo "修改失败";
}
echo "<br>";
echo "<br>";

mysqli_query($con,"insert into myguests (firstname,lastname,email) values ('455','ppn','amy@uu.com');");
if(mysqli_query($con,"insert into myguests (firstname,lastname,email) values ('455','ppn','amy@uu.com');")){
    echo "插入成功,插入的数据条数为";
    echo mysqli_affected_rows($con);  //只能获取到前一次影响的行数
}else{
    echo "插入失败";
}