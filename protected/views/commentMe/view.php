<?php
$this->breadcrumbs=array(
	'Comment Mes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CommentMe', 'url'=>array('index')),
	array('label'=>'Create CommentMe', 'url'=>array('create')),
	array('label'=>'Update CommentMe', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CommentMe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CommentMe', 'url'=>array('admin')),
);
?>

<h1>View CommentMe #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'create_user_id',
		'content',
		'statu_id',
		'create_time',
	),
)); ?>
