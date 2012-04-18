<div id="latest_event">
<span class="col_title"> Đổi Password: </span>

<div class="form">

<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 3.0}, 3000).fadeOut("index");',
       CClientScript::POS_READY
    );
?>
 
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>   
<?php else :?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
    'enableAjaxValidation'=>true,

    )); ?>
    
<?php if(Yii::app()->user->hasFlash('fail')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('fail'); ?>
    </div>    
<?php endif ; ?>    
       
	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'oldPassword'); ?>
		<?php echo $form->passwordField($model,'oldPassword',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'oldPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'password_repeat'); ?>
		<?php echo $form->passwordField($model,'password_repeat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password_repeat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Change pass',array('class'=>'small blue button')); ?>
	</div>

<?php $this->endWidget(); ?>
<?php endif ; ?>
</div><!-- form -->
</div>