<?php
header('content-type:text/html;charset=utf-8');

if (isset($_POST["submit"]) && $_POST["submit"] == "登陆") {
    $user = $_POST["username"];
    $psw = $_POST["password"];
    if ($user == "" || $psw == "") {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    } else {
        $link = mysqli_connect("localhost", "root", "123456");   //连接数据库
        mysqli_select_db($link, "users");  //选择数据库
        mysqli_query($link, "SET NAMES UTF8'"); //设定字符集
        $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
        $result = mysqli_query($link, $sql);
//        print_r($result);
        $num = mysqli_num_rows($result);
        if ($num) {
            $row = mysqli_fetch_array($result);  //将数据以索引方式储存在数组中
//            print_r($row);
            echo $row[0];
        } else {
            echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
        }
    }
} else {
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}

?>