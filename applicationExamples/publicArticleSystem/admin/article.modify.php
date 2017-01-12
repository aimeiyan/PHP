<?php

require_once('../connect.php');
//$id = $_GET['id'];  // 这样写容易被脚本注入
$id = intval($_GET['id']);  //这样防止脚本注入
$query = mysqli_query($con, "select * from article where id=$id");
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="CONTENT-TYPE" content="text/html" charset="utf-8">
    <title>修改文章</title>
    <style type="text/css">
        body {
            margin: 0;
        }
    </style>
</head>
<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
    <tr>
        <td height="89" colspan="2" bgcolor="#ffff99"><strong>后台管理系统</strong></td>
    </tr>
    <tr>
        <td width="213" height="287" align="left" valign="top" bgcolor="#ffff99">
            <p><a href="article.add.php">发布文章</a></p>
            <p><a href="article.manage.php">管理文章</a></p>
            <a href="article.add.php"></a>
        </td>
        <td width="854" valign="top" bgcolor="#ffffff">
            <form id="form1" name="form1" method="post" action="article.modify.handle.php">

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <table width="590" border="0" cellpadding="8" cellspacing="1">
                    <tr>
                        <td colspan="2" align="center">修改文章</td>
                    </tr>
                    <tr>
                        <td width="119">标题</td>
                        <td width="413">
                            <label for="title"></label>
                            <input type="text" name="title" id="title" value="<?php echo $data['title'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>作者</td>
                        <td>
                            <label for="author"></label>
                            <input type="text" name="author" id="author" value="<?php echo $data['author'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>简介</td>
                        <td>
                            <label for="description"></label>
                            <textarea name="description" id="description" cols="30" rows="10"><?php echo $data['description'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>内容</td>
                        <td>
                            <label for="content"></label>
                            <textarea name="content" id="content" cols="30" rows="10"><?php echo $data['content'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交"></td>
                    </tr>
                </table>

            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#ffff99"><strong>版权所有</strong></td>
    </tr>
</table>
</body>
</html>