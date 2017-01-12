<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/22/2016
 * Function:生成纯数字或者数字和字母混合的验证码
 */


session_start();   //必须放到程序的顶部，意思是在这个脚本本用session保存数据

$image = imagecreatetruecolor(100, 30); //创建长100宽30的黑色底图

$bgcolor = imagecolorallocate($image, 222, 223, 223);  //生成像素，色值
imagefill($image, 0, 0, $bgcolor);  //填充颜色值

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

//在底图上生成数字和字母的混合体
$captch_code = "";
for ($i = 0; $i < 4; $i++) {
    $fontSize = 6;
    $fontColor = imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120));

    $data = 'abcdefghijkmnpqrstuvwxy3456789';
    $fontContent = substr($data, rand(0, strlen($data)), 1);
    $captch_code .= $fontContent;

    $x = $i * 100 / 4 + rand(5, 10);
    $y = rand(5, 10);

    imagestring($image, $fontSize, $x, $y, $fontContent, $fontColor);

}

$_SESSION['authcode']=$captch_code;   //验证码内容保存到session的authcode的变量当中

//在底图上生成干扰点
for ($i = 0; $i < 100; $i++) {
    $pointColor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
    imagesetpixel($image, rand(1, 99), rand(1, 30), $pointColor);
}

//在底图上生成干扰线
for ($i = 0; $i < 5; $i++) {
    $lineColor = imagecolorallocate($image, rand(80, 220), rand(80, 220), rand(80, 220));
    imageline($image, rand(1, 99), rand(1, 29), rand(1, 99), rand(1, 29), $lineColor);
}

header("content-type:image/png");
imagepng($image);

//对图片销毁，即回收
imagedestroy($image);
?>