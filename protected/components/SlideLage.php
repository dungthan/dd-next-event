<?php
class SlideLage extends CWidget{
     protected function registerClientScript()
    {
        // ...publish CSS or JavaScript file here...
        $cssFile=Yii::app()->theme->baseUrl.'/css/style4.css';
        $jsFile=Yii::app()->theme->baseUrl.'/js/script.js';
        $jsFile2=Yii::app()->theme->baseUrl.'/js/jquery.easing.js';
       // $jsFile=Yii::app()->theme->baseUrl.'/js/jquery.easing.js';
        $cs=Yii::app()->clientScript;
        $cs->registerCssFile($cssFile);
        $cs->registerScriptFile($jsFile);
        $cs->registerScriptFile($jsFile2);
    }

    public function SlideLage(){
        $this->registerClientScript() ;
        $criteria = new CDbCriteria;
		$criteria->condition = "censor = 1 AND start_time >= NOW() ";
		$criteria->order = "e_like DESC";
		$criteria->limit = 10;
		$model = Event::model()->findAll($criteria);
		$this->render ('SlideLage', array ('model'=>$model));
    }
}

?>