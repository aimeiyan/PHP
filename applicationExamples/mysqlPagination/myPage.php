<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        .page{
            text-align: center;
            margin-top: 20px;
        }
        .page a{
            border: 1px solid #999;
            padding: 4px 6px;
            margin: 2px;
        }

        .page .current{
            border: 1px solid #3399CC;
            padding: 4px 6px;
            margin: 2px;
            background-color: #3399CC;
            color: #FFFFFF;
            font-weight: bold;
        }


        .page .disable{
            border: 1px solid #ddd;
            padding: 4px 6px;
            margin: 2px;
            /*background-color: #ddd;*/
            color: #ddd;
        }

        .page form{
            display: inline-block;
        }
    </style>
</head>
<body>


<?php
/**
 * Created by IntelliJ IDEA.
 * User: yanam
 * Date: 6/23/2016
 * Time: 1:21 PM
 * Function:简单分页功能
 */

header("content-type:text/html;charset=utf8;");

//echo "<pre>";
//print_r($_SERVER);   //输出服务器的信息

/**1、传入页码**/
$page = $_GET['p'];
/**2、根据页码取出数据:php->mysql处理**/
$host = 'localhost';
$username = 'root';
$password = '123456';
$db = 'mydb';
$pageSize = 10;
$showPage = 5;

//链接数据库
$con = mysqli_connect($host, $username, $password);
if (!$con) {
    echo "数据库连接失败";
    exit;
}

//选择数据库
mysqli_select_db($con, $db);
//设置数据库编码格式
mysqli_query($con, "set names utf8");

//创建数据到数据库,运行一次即可
//$inserSql="INSERT INTO `pagination` ( `name`) VALUES (name);";
//for($i=0;$i<100;$i++){
//    mysqli_query($con,'INSERT INTO `pagination` ( `name`) VALUES ("name'.($i+1).'");');
//}


//编写sql获取分页数据 SELECT*FROM 表名 LIMIT 起始位置，显示条数
$current = ($page - 1) * 10;
$sql = "SELECT * FROM pagination LIMIT $current,$pageSize";

//$sql = "SELECT * FROM pagination LIMIT {($page-1)*10}, 10";

//$sql = 'SELECT * FROM pagination';
//把sql语句传送到数据库
$result = mysqli_query($con, $sql);  //返回的是数据源

//print_r($result);

//处理数据
if ($result && mysqli_num_rows($result)) {
    echo '<div class="content"><table border="1" cellspacing="0" width="40%" align="center">';
    echo "<tr><td>ID</td><td>NAME</td></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "</tr>";
//        print_r($row);
    }
    echo "</table></div>";
}

//释放结果
mysqli_free_result($result);

//获取总页数
$total_sql = "SELECT COUNT(*) FROM pagination";
$total_result = mysqli_fetch_array(mysqli_query($con, $total_sql));
$total = $total_result[0];
//echo "总条数".$total;

$total_pages = ceil($total / $pageSize);

//关闭链接
mysqli_close($con);


/**3、显示数据+分页条**/
$page_banner = "<div class='page'>";

//计算偏移量=（显示的页码数-1）/2
$pageoffset = ($showPage - 1) / 2;

//当页码大于1时，显示“首页”和“上一页”
if ($page > 1) {
    $page_banner .= "<a href='" . $_SERVER['PHP_SELF'] . "?p=1'>首页</a>";
    $page_banner .= "<a href='" . $_SERVER['PHP_SELF'] . "?p=" . ($page - 1) . "'><上一页</a>";
}else{
    $page_banner .= "<span class='disable'>首页</span>";
    $page_banner .= "<span class='disable'><上一页</span>";
}

//初始化数据，设置显示页码的开始页码和结束页码
$start = 1;
$end = $total_pages;

if ($total_pages > $showPage) {
    if ($page > ($pageoffset + 1)) {  //当页码为4之后，前面就要出现省略号
        $page_banner .= "...";
    }

    //显示5个页码的起始页码和结束页码
    if ($page > $pageoffset) {
        $start = $page - $pageoffset;
        $end = $total_pages > ($page + $pageoffset) ? $page + $pageoffset : $total_pages;
    } else { //当页码为1、2时，处理代码
        $start = 1;
        $end = $total_pages > $showPage ? $showPage : $total_pages;
    }

    //为了保证显示5个页码，到了最后一页或者倒数第二页，则当前页后边就不显示页码了，前面就多显示相应个数的页码。
    if ($page + $pageoffset > $total_pages) {
        $start = $start - ($page + $pageoffset - $end);
    }
}

//显示完整的5个页码
for ($i = $start; $i <= $end; $i++) {
    if ($page == $i) {
        $page_banner .= "<span class='current'>$i</span>";  //为了给当前页添加样式而处理的代码，并且换成span标签而不是a标签，就没有href属性，那么在点击当前页的也不会请求了
    } else {
        $page_banner .= "<a href='" . $_SERVER['PHP_SELF'] . "?p={$i}'>{$i}</a>";
    }
}

//尾部省略
if ($total_pages > $showPage && $total_pages > ($page + $pageoffset)) {
    $page_banner .= "...";
}

//当页面小于总页数时，显示“下一页”和“尾页”
if ($page < $total_pages) {
    $page_banner .= "<a href='" . $_SERVER['PHP_SELF'] . "?p=" . ($page + 1) . "'>下一页></a>";
    $page_banner .= "<a href='" . $_SERVER['PHP_SELF'] . "?p=" . ($total_pages - 1) . "'>尾页</a>";
}else{
    $page_banner .= "<span class='disable'>下一页></span>";
    $page_banner .= "<span class='disable'>尾页</span>";
}

//显示总页码
$page_banner .= "共{$total_pages}页，";

//显示跳转form
$page_banner .= "<form method='get' action='myPage.php'>到第<input type='text' size='2' name='p'>页<input type='submit' value='确定'></form></div>";

echo $page_banner;


?>

</body>
</html>
