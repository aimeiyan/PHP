<?php
class HelloController extends CController
{
    public function actionSay()
    {
        $varYii = "hi,yii";
        $this->render('result', array('varYii'=>$varYii));
    }
}
?>