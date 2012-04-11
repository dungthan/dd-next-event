<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-me-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>
        
        <?php echo $form->hiddenField($model,'statu_id',array('value'=>$data->statu_id)); ?>
        
        <?php echo $form->hiddenField($model,'create_user_id',array('value'=>Yii::app()->user->id)); ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Trả lời' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
