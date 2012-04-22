
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
<? $this->widget('ext.EAjaxUpload.EAjaxUpload',
array(
        'id'=>'thumbmail',
        'config'=>array(
               'action'=>Yii::app()->createUrl('event/upload'),
               'allowedExtensions'=>array("jpg","jpeg","gif"),//array("jpg","jpeg","gif","exe","mov" and etc...
               'sizeLimit'=>10*1024*1024,// maximum file size in bytes
               'minSizeLimit'=>0,1*1024*1024,// minimum file size in bytes
               //'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
               'messages'=>array(
                                 'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                                 'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                                 'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                                 'emptyError'=>"{file} is empty, please select files again without it.",
                                 'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                                ),
               'showMessage'=>"js:function(message){ alert(message); }"
              )
)); ?>
    <img width='250' height='175' src ="<?php if ($model!=null AND $model->thumbnail!=null) { echo Yii::app()->request->baseUrl;?>/images/thumbnail/<?php echo $model->thumbnail;} else echo Yii::app()->request->baseUrl."/images/thumbnail/no_thumbnail.jpg";?>" />

<?//php endif ; ?>

</div>