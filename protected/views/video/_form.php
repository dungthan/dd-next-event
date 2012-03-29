<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'create_user_id', array('value'=>Yii::app()->user->id)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'typevideo_id'); ?>
		<?php echo $form->dropDownList($model,'typevideo_id', $model->getTypeVideo()); ?>
		<?php echo $form->error($model,'typevideo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permission'); ?>
		<?php echo $form->dropDownList($model,'permission',$model->getTypePermission()); ?>
		<?php echo $form->error($model,'permission'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Create'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->