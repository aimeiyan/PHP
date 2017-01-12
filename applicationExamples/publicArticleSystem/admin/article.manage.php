<?php
require_once('../connect.php');
$sql = "select * from article order by dateline desc";
$query = mysqli_query($con, $sql);
if ($query && mysqli_num_rows($query)) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

//    print_r($data);
} else {
    $data = array();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文章管理列表</title>
    <style type="text/css">
        body {
            margin: 0;
        }
    </style>
</head>
<body>
<table width="100%" height="520" border="0" cellspacing="1" cellpadding="8" bgcolor="#000000">
    <tr>
        <td height="89" colspan="2" bgcolor="#ffff99"><strong>后台管理系统</strong></td>
    </tr>
    <tr>
        <td class="156" height="287" align="left" valign="top" bgcolor="#ffff99">
            <p><a href="article.add.php">发布文章</a></p>
            <p><a href="article.manage.php">管理文章</a></p>
        </td>
        <td width="837" valign="top" bgcolor="#ffffff">
            <table width="743" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
                <tr>
                    <td colspan="3" align="center" bgcolor="#ffffff">文章管理列表</td>
                </tr>
                <tr>
                    <td width="37" bgcolor="#ffffff">编号</td>
                    <td width="572" bgcolor="#ffffff">标题</td>
                    <td width="82" bgcolor="#ffffff">操作</td>
                </tr>
                <?php
                if (!empty($data)) {
                    foreach ($data as $value) {
                        ?>
                        <tr>
                            <td bgcolor="#ffffff">&nbsp;<?php echo $value['id'] ?></td>
                            <td bgcolor="#ffffff">&nbsp;<?php echo $value['title'] ?></td>
                            <td bgcolor="#ffffff">
                                <a href="article.del.handle.php?id=<?php echo $value['id'] ?>">删除</a>
                                <a href="article.modify.php?id=<?php echo $value['id'] ?>">编辑</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#ffff99">
            <strong>版权所有</strong>
        </td>
    </tr>
</table>
</body>
</html>
