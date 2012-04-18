<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'friend-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'user1_id'); ?>
		<?php echo $form->error($model,'user1_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'user2_id'); ?>
		<?php echo $form->error($model,'user2_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'request'); ?>
		<?php echo $form->error($model,'request'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'Quan hệ'); ?>
		<?php echo $form->dropDownList($model,'friendship',array('1'=>'Bạn bè','2'=>'Bạn thân','3'=>'Gia đình')); ?>
		<?php echo $form->error($model,'friendship'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->