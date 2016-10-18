<?php
namespace app\controllers;
class AnamaiController extends \yii\web\Controller{
    
        public function test(){
            $title= 'Hello Controller action Anamai';
            
            return $this->render('test',['title'=>$title]);
        }
        
}
