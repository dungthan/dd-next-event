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
<div class="flash-success">
        <?php echo Yii::app()->user->getFlash('error'); ?>
        <?php  echo "<b>Xin vui lòng nhập chính xác các thông tin</b>"?>
    </div>  
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'typeevent_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'typeevent_id',$model->getTypeEventOptions()); ?>
		<?php echo $form->error($model,'typeevent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php  $this->widget('application.extensions.cleditor.ECLEditor', array(
            'model'=>$model,
            'attribute'=>'content', 
            'options'=>array(
                'width'=>'600',
                'height'=>250,
                'useCSS'=>true,
            ),
            'value'=>$model->content, 
         )); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
        <?php 
        $this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
                        'model'=>$model,
                        'attribute'=>'start_time',
                        'value'=>$model->start_time,
                        'options'=>array(
                        	'stepHour'=> 1,
                        	'stepMinute'=>15,
                            'minuteGrid' => 15,
                            'hourMin' => 6,
                            'hourMax' => 23,
                            'dateFormat'=>'yy-mm-dd',
                            'timeFormat'=>'hh:mm',
                        ),
                    ))
        ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
        <?php 
          $this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
                        'model'=>$model,
                        'attribute'=>'end_time',
                        'value'=>$model->end_time,
                        'options'=>array(
                        	'stepHour'=> 1,
                        	'stepMinute'=>15,
                            'minuteGrid' => 15,
                            'hourMin' => 6,
                            'hourMax' => 23,
                            'dateFormat'=>'yy-mm-dd',
                            'timeFormat'=>'hh:mm',
                        ),
                    ))
        ?>
		<?php echo $form->error($model,'end_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_guest'); ?>
		<?php echo $form->textField($model,'number_guest'); ?>
		<?php echo $form->error($model,'number_guest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimention'); ?>
		<?php echo $form->dropDownList($model,'dimention',array('lớn'=>'Large','nhỏ'=>'Small')); ?>
		<?php echo $form->error($model,'dimention'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif ; ?>