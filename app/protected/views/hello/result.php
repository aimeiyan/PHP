<?php
header('content-type:text/html;charset=utf-8');

echo $varYii;
//echo phpinfo();
echo "<br>";
echo "<br>";
//$imgurl = dirname(__FILE__) . '\mapRelationship.jpg';
//echo $imgurl;
echo "<div>资源映射规则：访问url经过index.php处理，将请求转发到HelloController的actionSay方法中，然后通过result.php生成最终HTML页面。</div>";
echo "<br>";
echo "<div>访问映射关系见readme文件夹下的mapRelationship.jpg</div>";

?>