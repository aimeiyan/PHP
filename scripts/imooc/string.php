<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/16/2016
 * Time: 2:45 PM
 */
header('content-type:text/html;charset=utf-8');

/**
 * 单引号和双引号的区别
 */

//PHP允许在双引号串中直接包含 “字符变量”
//而单引号串中的内容总被认为是普通字符。

$str='hello';
echo "str is $str";
echo "<br>";
echo 'str is $str';
echo "<br>";
echo "<br>";

/**
 * 去除字符串首尾的空格
 */

$str="      左侧空格要去掉   ";
echo $str;
echo "<br>";
echo trim($str);
echo "<br>";
echo ltrim($str);
echo "<br>";
echo rtrim($str);
echo "<br>";

/**
 * 获取字符串长度
 */

//strlen函数对于计算英文字符是非常的擅长
//使用mb_strlen()函数获取字符串中中文长度

$love='I love you';
echo strlen($love);
echo "<br>";

$love1='我爱你';
//echo mb_strlen($love1,"UTF8");  //结果：3，此处的UTF8表示中文编码是UTF8格式，中文一般采用UTF8编码
echo "<br>";

/**
 * 截取字符串
 */

//1、英文字符串的截取函数substr()
$str2='hello,world';
echo substr($str2,6,5);

echo "<br>";

//2、中文字符串的截取函数mb_substr()
$str3='我爱你，中国';
//echo mb_substr($str3,4,2,'utf8');
echo "<br>";


/**
 * 查找字符串
 */

//查找字符串函数strpos()
//strpos(要处理的字符串, 要定位的字符串, 定位的起始位置[可选])
$str4 = 'What is your name?';
echo strpos($str4,'name');
echo "<br>";

/**
 * 字符串的合并与分割
 */

$str6 = 'sun-moon-star';
//字符串分隔函数explode()
print_r(explode('-',$str6));

echo "<br>";

$arr2=array('hello','world');
//字符串合并函数implode()
print_r(implode(",",$arr2));
echo "<br>";

/**
 * 字符串转义
 */

//字符串转义函数addslashes(),用于对特殊字符加上转义字符，返回一个字符串
//返回值：一个经过转义后的字符串
$str8 = "what's this?";
echo addslashes($str8);
echo "<br>";

/**
 * 替换字符串
 */

//替换函数str_replace()
//str_replace(要查找的字符串, 要替换的字符串, 被搜索的字符串, 替换进行计数[可选])
$str11 = 'I Love Chian';
echo str_replace('Chian','China',$str11);
echo "<br>";
?>