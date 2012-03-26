<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'userprofiles-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'display_name'); ?>
		<?php echo $form->textField($model,'display_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'display_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'bod'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'name'=>'Userprofiles[bod]',
				'value'=>$model->bod,
				'language'=>'en',
				'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'changeMonth'=>true,
					'changeYear'=>true,
					'showButtonPanel'=>'true',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAdmin'=>'slide',
				),
			)
		); ?>
		<?php echo $form->error($model,'bod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender',$model->getTypeGender()); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_line1'); ?>
		<?php echo $form->textField($model,'address_line1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address_line1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_line2'); ?>
		<?php echo $form->textField($model,'address_line2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address_line2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_line3'); ?>
		<?php echo $form->textField($model,'address_line3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address_line3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yim_handle'); ?>
		<?php echo $form->textField($model,'yim_handle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'yim_handle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skype_handle'); ?>
		<?php echo $form->textField($model,'skype_handle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'skype_handle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebooksite'); ?>
		<?php echo $form->textField($model,'facebooksite',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'facebooksite'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bio'); ?>
		<?php $this->widget('application.extensions.cleditor.ECLEditor',
			array(
				'name'=>'Userprofiles[bio]',
				'value'=>$model->bio,
			)); ?>
		<?php echo $form->error($model,'bio'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tiếp tục' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
