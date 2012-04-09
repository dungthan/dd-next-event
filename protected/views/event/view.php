<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Event', 'url'=>array('index')),
	array('label'=>'Create Event', 'url'=>array('create')),
	array('label'=>'Update Event', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Change Thumbnail', 'url'=>array('thumbnail', 'id'=>$model->id)),
	array('label'=>'Delete Event', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Event', 'url'=>array('admin')),
);
?>
<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 3.0}, 3000).fadeOut("view");',
       CClientScript::POS_READY
    );
?>
 
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>   
<?php endif ;?>
<h3>Event :<?php echo $model->name; ?></h3>

<div class="form">
<?php if ($model->checkLike($model->id, Yii::app()->user->id) === false):?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'like-form',
	'enableAjaxValidation'=>false,
)); ?>  
<?php if (Yii::app()->user->id !== NULL):?>
        <?php echo $form->hiddenField($like,'user_id', array('value'=>Yii::app()->user->id));?>
        <div class="row buttons">
		<?php echo CHtml::submitButton('Like'); ?>
	</div>
<?php endif;?>
<?php foreach ($str_like as $line):?>
        <?php $name = Userprofiles::model()->findByPk($line['user_id']);?>
        <?php echo CHtml::link(CHtml::encode($name->display_name), array('/userprofiles/view', 'id'=>$name->user_id));?>
<?php endforeach;?>
<?php echo "... like event ";?>
<?php $this->endWidget(); ?>
<?php endif; ?>
<?php if ($model->checkLike($model->id, Yii::app()->user->id) === true):?>
 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'like-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php if (Yii::app()->user->id !== NULL):?>
        <?php echo $form->hiddenField($like,'user_id', array('value'=>Yii::app()->user->id));?>
        <div class="row buttons">
		<?php echo CHtml::submitButton('UnLike'); ?>
	</div>
        <?php echo CHtml::link(CHtml::encode("Bạn"), array('/userprofiles/view', 'id'=>Yii::app()->user->id));?>
<?php endif;?>
<?php foreach ($str_like as $line):?>
        <?php $name = Userprofiles::model()->findByPk($line['user_id']);?>
        <?php echo CHtml::link(CHtml::encode($name->display_name), array('/userprofiles/view', 'id'=>$name->user_id));?>
<?php endforeach;?>
<?php echo "... đã like event ";?>
<?php $this->endWidget(); ?>
<?php endif; ?>
</div><!-- form -->
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'content:html',
		'start_time',
		'end_time',
		'censor',
		'view',
		'e_like',
	),
)); ?>
<?php  if(Yii::app()->user->name=='admin'){ echo $this->renderPartial('_censor', array('model'=>$model));} ?>

