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


    function __construct($par1, $par2)
    {
        $this->url = $par1;
        $this->title = $par2;
    }

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

//子类扩展站点类别
class Child_Site extends Site
{
    var $category;

    function setCat($par)
    {
        $this->category = $par;
    }

    function getCat()
    {
        echo $this->category . "<br>";
    }
}

$taobao = new Site("http://www.taobao.com", "淘宝网");
$google = new Site("http://www.google.com", "谷歌");
$jingdong = new Child_Site("http://www.jingdong.com", "京东");
$jingdong->setCat("品类");
$jingdong->getCat();
$jingdong->getTitle();
$jingdong->getUrl();

//$taobao->setUrl("http://www.taobao.com");
//$google->setUrl("http://www.google.com");

//$taobao->setTitle("淘宝网");
//$google->setTitle("谷歌");

$taobao->getUrl();
$google->getUrl();
$taobao->getTitle();
$google->getTitle();

?>
</body>
</html>