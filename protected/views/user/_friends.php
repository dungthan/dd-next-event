

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'friend-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($friends); ?>
	<div class="row">
		<?php echo $form->hiddenField($friends,'user1_id'); ?>
		<?php echo $form->error($friends,'user1_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->hiddenField($friends,'user2_id'); ?>
		<?php echo $form->error($friends,'user2_id'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($friends->isNewRecord ? 'Kết Bạn' : 'Kết Bạn'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->