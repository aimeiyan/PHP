<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/22/2016
 * Function:生成图片验证码
 */


//注释：这个实例未成功，需要在研究

session_start();   //必须放到程序的顶部，意思是在这个脚本本用session保存数据

//这个table变量维护的每个物料对应的值，用户需要识别出来的值，这个值将会存储在session里
$table = array(
    "pic0" => '猫',
    "pic1" => '鼠',
    "pic2" => '狗',
    "pic3" => '瘦狗',
);

$index = rand(0, 3);

$value = $table['pic' . $index];
$_SESSION['authcode'] = $value;

$filename = dirname(__FILE__) . '\\pic' . $index . '.jpg';
$contents = file_get_contents($filename);
ob_clean();
header("content-type:image/jpg");
echo $contents;

?>