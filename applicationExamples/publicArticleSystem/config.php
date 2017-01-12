<?php

/**
 * Created by IntelliJ IDEA.
 * User: yanam
 * Date: 6/21/2016
 * Time: 9:56 AM
 * 配置mysql的参数
 */

//用常量配置mysql的参数，避免被修改。
//定义常量的用户名一般用大写
header("Content-type:text/html;charset=utf-8");
define('HOST', '127.0.0.1');  //mysql安装在本机，用127.0.0.1，或者localhost
define('USERNAME','root');
define('PASSWORD','123456');


?>