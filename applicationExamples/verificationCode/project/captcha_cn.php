<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/22/2016
 * Function:生成纯数字或者数字和字母混合的验证码
 */


session_start();   //必须放到程序的顶部，意思是在这个脚本本用session保存数据

$image = imagecreatetruecolor(200, 60); //创建长100宽30的黑色底图

$bgcolor = imagecolorallocate($image, 222, 223, 223);  //生成像素，色值
imagefill($image, 0, 0, $bgcolor);  //给底图填充颜色值

//在底图上生成4个数字
//for($i=0;$i<4;$i++){
//    $fontSize=6;
//    $fontColor=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
//    $fontContent=rand(0,9);
//
//    $x=$i*100/4+rand(5,10);
//    $y=rand(5,10);
//
//    imagestring($image,$fontSize,$x,$y,$fontContent,$fontColor);
//
//}

//在底图上生成汉字
$fontface='STCAIYUN.TTF';
$str="玉刊末未示击打巧正扑扒功扔去甘世古节本术可丙左厉石右布龙平灭轧东卡北占业旧帅归目旦且叮叶甲申号电田由只央史兄叼叫叨另叹四生失禾丘付仗代仙们仪白仔他斥瓜乎丛令用甩印乐句匆册犯外处冬鸟务包饥主市立闪兰半汁汇头汉宁穴它讨写让礼训必议讯记永司尼民出辽奶奴加召皮边孕发圣对台矛纠母幼丝";
$strdb=str_split($str,3);   //3代表一个汉字占3个字符

//begin 下面的三行是用来调试用的
//header("content-type:text/html;charset=utf8;");
//var_dump($strdb);
//die(); //终止下面的程序
//end 下面的三行是用来调试用的

$captch_code = "";
for ($i = 0; $i < 4; $i++) {
    $fontColor = imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120));

    $index=rand(0,count($strdb));
    $cn=$strdb[$index];
    $captch_code.=$cn;

    imagettftext($image,mt_rand(20,24),mt_rand(-60,60),(40*$i+20),mt_rand(30,35),$fontColor,$fontface,$cn);
}

$_SESSION['authcode']=$captch_code;   //验证码内容保存到session的authcode的变量当中

//在底图上生成干扰点
for ($i = 0; $i < 100; $i++) {
    $pointColor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
    imagesetpixel($image, rand(1, 199), rand(1, 60), $pointColor);
}

//在底图上生成干扰线
for ($i = 0; $i < 5; $i++) {
    $lineColor = imagecolorallocate($image, rand(80, 220), rand(80, 220), rand(80, 220));
    imageline($image, rand(1, 199), rand(1, 59), rand(1, 199), rand(1, 59), $lineColor);
}

header("content-type:image/png");
imagepng($image);

//对图片销毁，即回收
imagedestroy($image);
?>