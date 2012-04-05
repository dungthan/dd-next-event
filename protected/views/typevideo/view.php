<?php
$this->breadcrumbs=array(
	'Typevideos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Typevideo', 'url'=>array('index')),
	array('label'=>'Create Typevideo', 'url'=>array('create')),
	array('label'=>'Update Typevideo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Typevideo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Typevideo', 'url'=>array('admin')),
);
?>

<h1>View Typevideo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
