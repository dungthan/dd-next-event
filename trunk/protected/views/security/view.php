<?php
$this->breadcrumbs=array(
	'Securities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Security', 'url'=>array('index')),
	array('label'=>'Create Security', 'url'=>array('create')),
	array('label'=>'Update Security', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Security', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Security', 'url'=>array('admin')),
);
?>

<h1>View Security #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'userprofile',
		'myvideo',
        'friend',
	),
)); ?>
