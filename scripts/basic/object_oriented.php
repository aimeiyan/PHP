<html>
<head>
    <meta charset="UTF-8">
    <title>面向对象</title>
</head>
<body>
<?php

class Site
{
//    成员变量
    var $url;
    var $title;

//    成员函数
    function setUrl($par)
    {
        $this->url = $par;
    }

    function getUrl()
    {
        echo $this->url . "<br>";
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . "<br>";
    }
}

$taobao = new Site;
$google = new Site;

$taobao->setUrl("http://www.taobao.com");
$google->setUrl("http://www.google.com");

$taobao->setTitle("淘宝网");
$google->setTitle("谷歌");

$taobao->getUrl();
$google->getUrl();
$taobao->getTitle();
$google->getTitle();

?>
</body>
</html>