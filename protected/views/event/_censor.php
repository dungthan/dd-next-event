
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	'enableAjaxValidation'=>true,
    'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'censor'); ?>
		<?php echo $form->dropDownList($model,'censor',array('0'=>'Chưa Kiểm Duyệt','1'=>'Đã Kiểm Duyệt')); ?>
		<?php echo $form->error($model,'censor'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Kiểm Duyệt',array('class'=>'small blue button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
