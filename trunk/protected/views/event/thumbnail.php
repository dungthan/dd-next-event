
<?php
$this->breadcrumbs = array(
    'Thumbnail',
);
?>
<?php 


print('<div id="latest_event"  >
            <span class="col_title">Thumnail </span>');
            
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
    echo Chtml::submitButton ('Thumbnail',array('class'=>'small blue button'));
	
$this->endWidget();
?>

    <img width='250' height='175' src ="<?php if ($model!=null AND $model->thumbnail!=null) { echo Yii::app()->request->baseUrl;?>/images/thumbnail/<?php echo $model->thumbnail;} else echo Yii::app()->request->baseUrl."/images/thumbnail/no_thumbnail.jpg";?>" />

<?//php endif ; ?>

</div>