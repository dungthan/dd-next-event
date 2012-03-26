<?php
$this->breadcrumbs=array(
	'Like Status'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LikeStatu', 'url'=>array('index')),
	array('label'=>'Create LikeStatu', 'url'=>array('create')),
	array('label'=>'Update LikeStatu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LikeStatu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LikeStatu', 'url'=>array('admin')),
);
?>

<h1>View LikeStatu #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'statu_id',
	),
)); ?>
