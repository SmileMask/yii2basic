<?php
namespace app\controllers;
class AnamaiController extends \yii\web\Controller{
    
        public function actionTest(){
            
            $a=30;
            $b=89;
            $c=$a+$b;
            $title= $c;
            
            return $this->render('test',['title'=>$title]);
        }
        
}
