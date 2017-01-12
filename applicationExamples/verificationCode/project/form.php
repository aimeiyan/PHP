<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 6/22/2016
 * Time: 3:21 PM
 */
header("content-type:text/html;charset=utf8");

if (isset($_REQUEST['authcode'])) {
    session_start();
    if (strtolower($_REQUEST['authcode']) == $_SESSION['authcode']) {
        echo '<font color="#0000cc">输入正确</font>';
    } else {
        echo '<font color="#cc0000">输入错误</font>';

    }
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>确认验证码</title>
</head>
<body>
<form action="form.php" method="post">
    <p>验证码图片:<img id="captcha_img" border="1" src="captcha.php?r=<?php echo rand() ?>" width="100" height="30">
        <a href="javascript:void(0);" onclick="document.getElementById('captcha_img').src='captcha.php?/r='+Math.random()">换一个？</a>
    </p>
    <p>请输入图片中的内容：<input type="text" name="authcode" value=""></p>
    <p><input type="submit" value="提交" style="padding: 6px 12px;"></p>
</form>
</body>
</html>