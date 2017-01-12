<?php

/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/15/2016
 * Time: 1:55 PM
 */

//所谓可变函数，即通过变量的值来调用函数，因为变量的值是可变的，所以可以通过改变一个变量的值来实现调用不同的函数。
//经常会用在回调函数、函数列表，或者根据动态参数来调用不同的函数。可变函数的调用方法为变量名家括号。


header('content-type:text/html;charset=utf-8');

/**
 * 可变函数
 */
function name(){
    echo 'jobs';
}

$func='name';
$func();  //调用可变函数




class book
{
    function getName()
    {
        return 'bookname';
    }
}

$func = 'getName';
$book = new book();
$book->$func();


/**
 * 内置函数
 */
$str="苹果很好吃!";
$str=str_replace("苹果","香蕉",$str);
echo "<br>".$str;


/**
 * 判断函数是否存在
 */

function func1(){

}

if(function_exists('func1')){
    echo "<br>exists";
}

?>