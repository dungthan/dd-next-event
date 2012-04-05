<?php
    /*Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 3.0}, 3000).fadeOut("index");',
       CClientScript::POS_READY
    );
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-error").animate({opacity: 3.0}, 3000).fadeOut("index");',
       CClientScript::POS_READY
    );
?>
 
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>   
<?php else :?>
<?php if(Yii::app()->user->hasFlash('error')):?>
<div class="flash-error">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>  
<?php endif ; */?>
<div class="form">



<?php
$this->breadcrumbs = array(
    'Thumbnail',
);
?>
<?php 
$this->beginWidget('CActiveForm', array(
    'id'=>'event-form',
    'enableAjaxValidation'=>true,
    'htmlOptions'=>array (
        'enctype'=>'multipart/form-data',
    ),
));
?>
<?php 

    echo Chtml::activeFileField($model,'thumbnail');
    echo CHtml::error ($model,'thumbnail');
    echo Chtml::submitButton ('Thumbnail');
	
$this->endWidget();
?>

            <li>
                <img width='250' height='175' src ="<?php if ($model!=null AND $model->thumbnail!=null) { echo Yii::app()->request->baseUrl;?>/images/thumbnail/<?php echo $model->thumbnail;} else echo Yii::app()->request->baseUrl."/images/thumbnail/no_thumbnail.jpg";?>" />
            </li>
     
<?//php endif ; ?>

