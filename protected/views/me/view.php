<?php
$this->breadcrumbs=array(
	'Mes'=>array('index'),
	$model->statu_id,
);

$this->menu=array(
	array('label'=>'List Me', 'url'=>array('index')),
	array('label'=>'Create Me', 'url'=>array('create')),
	array('label'=>'Update Me', 'url'=>array('update', 'id'=>$model->statu_id)),
	array('label'=>'Delete Me', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->statu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Me', 'url'=>array('admin')),
);
?>

<h1>View Me #<?php echo $model->statu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'statu_id',
		'user_id',
		'content',
		'create_time',
		'permission',
	),
)); ?>
