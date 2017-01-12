<?php

//资源映射规则：访问url经过index.php处理，将请求转发到HelloController的actionSay方法中，然后通过result.php生成最终HTML页面。


// change the following paths if necessary
$yii = dirname(__FILE__) . '\..\yii-1.1.14.f0fee9\framework\yii.php';

//echo $yii;

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each logmessage
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
Yii::createWebApplication()->run();

?>