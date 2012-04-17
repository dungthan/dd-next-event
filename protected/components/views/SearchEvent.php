
<?php 
$form=$this->beginWidget ('CActiveForm', array(
	'action'=>Yii::app()->createUrl('/event/searchevent'),
	'method'=>'get',
));
?>

		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'name',
			'data'=>$ListEvent,
			'multiple'=>false,
			'htmlOptions'=>array('size'=>25,'placeholder'=> 'Tìm Kiếm Event'),
		)); ?>
        

	<?php echo CHtml::submitButton('Tìm Kiếm',array('class'=>'small blue button'));?>

<?php $this->endWidget();?>
