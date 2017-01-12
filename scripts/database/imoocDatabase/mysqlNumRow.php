<?php

header("Content-type:text/html;charset=utf8");

/**
 *
 * mysql_num_rows 结果集中的行的数量
 *
 */

//连库、择库、设定字符集
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,"mydb");
mysqli_query($con,"set names utf8");

//发指令、取数据
$query=mysqli_query($con,'select * from myguests');
echo mysqli_num_rows($query);
echo "<br>";
echo "<br>";
if($query&&mysqli_num_rows($query)){
    while($row=mysqli_fetch_row($query)){
//        echo $row[1];
        print_r($row);
        echo "<br>";
    }
}else{
    echo '没有数据';
}