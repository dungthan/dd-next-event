<?php
class SlideLage extends CWidget{
     protected function registerClientScript()
    {
        // ...publish CSS or JavaScript file here...
        $cssFile=Yii::app()->theme->baseUrl.'/css/style4.css';
        $jsFile=Yii::app()->theme->baseUrl.'/js/script.js';
        $cs=Yii::app()->clientScript;
        $cs->registerCssFile($cssFile);
        $cs->registerScriptFile($jsFile);
    }
    public function SlideLage(){
        $this->registerClientScript() ;
        $criteria = new CDbCriteria;
		$criteria->condition = "censor = 1 ";
		$criteria->order = "e_like DESC";
		$criteria->limit = 5;
		$model = Event::model()->findAll($criteria);
		$this->render ('SlideLage', array ('model'=>$model));
    }
}

?>