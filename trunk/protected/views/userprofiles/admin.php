<?php
$this->breadcrumbs=array(
	'Userprofiles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Userprofiles', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('userprofiles-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Userprofiles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'userprofiles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'user_id',
		'display_name',
		'first_name',
		'last_name',
		'company',
		'lang',
		/*
		'bio',
		'bod',
		'gender',
		'phone',
		'mobile',
		'address_line1',
		'address_line2',
		'address_line3',
		'yim_handle',
		'skype_handle',
		'avatar',
		'facebooksite',
		'update_on',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
