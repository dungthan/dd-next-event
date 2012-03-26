<?php
$this->breadcrumbs = array(
    'Avatar',
);
?>
<?php 
$this->beginWidget('CActiveForm', array(
    'id'=>'user-profiles-form',
    'enableAjaxValidation'=>true,
    'htmlOptions'=>array (
        'enctype'=>'multipart/form-data',
    ),
));
?>
<?php 

    echo Chtml::activeFileField($model,'avatar');
    echo CHtml::error ($model,'avatar');
    echo Chtml::submitButton ('UpFile');
$this->endWidget();
?>

            <li>
                <img width='250' height='175' src ="<?php if ($model!=null AND $model->avatar!=null) { echo Yii::app()->request->baseUrl;?>/avatar/<?php echo $model->avatar;} else echo Yii::app()->request->baseUrl."/images/noavatar.gif";?>" />
            </li>
     
