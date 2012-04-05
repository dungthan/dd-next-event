
<?php 
$form=$this->beginWidget ('CActiveForm', array(
	'action'=>Yii::app()->createUrl('/friend/searchfriend'),
	'method'=>'get',
));
?>

		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'username',
			'data'=>$ListUser,
			'multiple'=>false,
			'htmlOptions'=>array('size'=>25,'placeholder'=> 'Nhập Thông Tin'),
		)); ?>
        

	<?php echo CHtml::submitButton('Search',array('class'=>'small gray button'));?>

<?php $this->endWidget();?>
