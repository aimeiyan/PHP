<?php
/**
 * Created by IntelliJ IDEA.
 * User: yanam
 * Date: 6/21/2016
 * Time: 9:57 AM
 * 数据库的初始化
 */

require_once('config.php');

//数据库的初始化有三个步骤

//连库
if (!($con = mysqli_connect(HOST, USERNAME, PASSWORD))) {
    echo mysqli_error($con);
}

//选库
if (!mysqli_select_db($con, "mydb")) {
    echo mysqli_error($con);
}

//字符集
if (!mysqli_query($con, 'set names utf8')) {
    echo mysqli_error($con);
}


//注释：上面的error等程序完成之后是要屏蔽的，避免暴露mysql的漏洞

?>