<?php
$this->pageTitle=Yii::app()->name . ' - Me';
$this->breadcrumbs=array(
	'Me',
);
?>


        <?php 
                if ($model['model_create'] !== NULL) // hiện form create me 
                {
                        $this->renderPartial('_form',array('model'=>$model['model_create']));
                        $this->renderPartial('index',array('dataProvider'=>$model['dataProvider']));
                }else // không hiện form create me 
                {
                        $this->renderPartial('index',array('dataProvider'=>$model['dataProvider']));
                }
                
        ?>

