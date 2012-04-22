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
        <ul class="list_mem "><li>
        <?php $profiles = Userprofiles::model()->findByPk(Yii::app()->user->id);
             echo CHtml::link('<img alt="'.$profiles->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$profiles->avatar.'" width = 35px height = 34px/>', array('/me/me', 'id'=>Yii::app()->user->id));
        ?> </li>
        
		<?php echo $form->textField($model,'content',array('size'=>60,'placeholder'=> 'Bình luận ')); ?>
		<?php echo $form->error($model,'content'); ?>
        </ul>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Trả lời' : 'Save',array('class'=>'small white button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
