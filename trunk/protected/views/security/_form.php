<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'security-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'userprofile'); ?>
		<?php echo $form->dropDownList($model,'userprofile',array('0'=>'Công Khai','1'=>'Bạn bè','2'=>'Bạn thân','3'=>'Gia đình')); ?>
		<?php echo $form->error($model,'userprofile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'myvideo'); ?>
		<?php echo $form->dropDownList($model,'myvideo',array('0'=>'Công Khai','1'=>'Bạn bè','2'=>'Bạn thân','3'=>'Gia đình')); ?>
		<?php echo $form->error($model,'myvideo'); ?>
	</div>
    
    	<div class="row">
		<?php echo $form->labelEx($model,'friend'); ?>
		<?php echo $form->dropDownList($model,'friend',array('0'=>'Công Khai','1'=>'Bạn bè','2'=>'Bạn thân','3'=>'Gia đình')); ?>
		<?php echo $form->error($model,'friend'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->