<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/20/2016
 * Time: 2:55 PM
 */

/**
 * 总结：
 * ************************关联数组************************
 * mysqli_fetch_array($query,MYSQLI_ASSOC);
 * ************************索引数组************************
 * mysqli_fetch_row($query);
 * mysqli_fetch_array($query,MYSQLI_NUM);
 * *************************关联+索引数组************************
 * mysqli_fetch_array($query,MYSQLI_BOTH);
 * mysqli_fetch_array($query);
 */

//获取和显示数据
//mysqli_fetch_row();
//mysqli_fetch_array();
//mysqli_fetch_assoc();
//mysqli_fetch_object();
echo "<br>";

$con = mysqli_connect('localhost', 'root', '123456');
mysqli_select_db($con, 'mydb');
mysqli_query($con, "set names 'utf8'");

/**
 * mysqli_fetch_row()  以索引数组形式获取数据
 * 每执行一次，都从资源也就是结果集里依次取一条数据，以数组的形式返回回来，当前一次已经取到最后一条数据的时候，这一次返回空结果。
 * 返回的结果是一个一维索引数组，每一个下标与数据库里字段的排序相对应。
 */
//$query = mysqli_query($con, 'select * from myguests');  //当mysqli_query执行的sql语句是select的时候，如果执行成功，返回的是资源标识符。
$query = mysqli_query($con, 'select firstname,lastname from myguests');  //当mysqli_query执行的sql语句是select的时候，如果执行成功，返回的是资源标识符。
//print_r($query);
//print_r(mysqli_fetch_row($query));  //返回查询资源的第一条数据
while ($row = mysqli_fetch_row($query)) { //返回查询资源的所有数据
    //print_r($row);
    echo $row[0] . '&nbsp;&nbsp;' . $row[1] . '<br>';
}

$row1 = mysqli_fetch_row($query);
print_r($row1);

$row2 = mysqli_fetch_row($query);
print_r($row2);

$row3 = mysqli_fetch_row($query);
print_r($row3);

$row4 = mysqli_fetch_row($query);
print_r($row4);

$row5 = mysqli_fetch_row($query);
print_r($row5);

$row6 = mysqli_fetch_row($query);
print_r($row6);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/**
 * mysqli_fetch_array() 比 mysqli_fetch_row() 的速度慢的多，因为mysqli_fetch_row()通过数字下标取数据要快的说
 * 默认状态下，取一条数据产生一个索引数组和一个关联数组
 */


$query2 = mysqli_query($con, 'select * from myguests;');
$arr = mysqli_fetch_array($query2);
$arr1 = mysqli_fetch_array($query2, MYSQLI_ASSOC);  //只取关联数组
$arr2 = mysqli_fetch_array($query2, MYSQLI_NUM);  //只取数字数组（索引数组）
$arr3 = mysqli_fetch_array($query2, MYSQLI_BOTH);  //只取数字数组（索引数组）
print_r($arr);
echo "<br>";
print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br>";
print_r($arr3);

echo "<br>";

echo $arr['firstname'];

echo "<br>";
echo "<br>";
echo "<br>";

/**
 * mysqli_fetch_assoc()  输出的是关联数组
 */
$query3 = mysqli_query($con, 'select * from myguests;');
$arr4=mysqli_fetch_assoc($query3);
print_r($arr4);

while($arr5=mysqli_fetch_assoc($query3)){
    print_r($arr5);
    echo "<br>";
}


/**
 *
 * mysqli_fetch_object()  输出的是关联数组
 *
 */
echo "<br>";
echo "<br>";
$query4 = mysqli_query($con, 'select * from myguests;');
$arr6=mysqli_fetch_object($query4);
print_r($arr6);
echo "<br>";

echo $arr6->firstname;
echo "<br>";
echo "<br>";
echo "<br>";
while($arr7=mysqli_fetch_object($query4)){
    echo $arr7->firstname;
    echo "<br>";

}


?>