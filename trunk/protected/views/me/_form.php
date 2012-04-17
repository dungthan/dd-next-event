<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'me-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'user_id', array('value'=>Yii::app()->user->id)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'placeholder'=> 'Bạn đang nghĩ gì ?')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permission'); ?>
		<?php echo $form->dropDownList($model,'permission',$model->getPermission()); ?>
		<?php echo $form->error($model,'permission'); ?>
	</div>


		<b><?php echo CHtml::submitButton($model->isNewRecord ? 'Viết lên tường' : 'Save',array('class'=>'small white button')); ?></b>
	

<?php $this->endWidget(); ?>

</div><!-- form -->
