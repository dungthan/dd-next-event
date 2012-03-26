<?php
$this->breadcrumbs=array(
	'Mes'=>array('index'),
	$model->statu_id=>array('view','id'=>$model->statu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Me', 'url'=>array('index')),
	array('label'=>'Create Me', 'url'=>array('create')),
	array('label'=>'View Me', 'url'=>array('view', 'id'=>$model->statu_id)),
	array('label'=>'Manage Me', 'url'=>array('admin')),
);
?>

<h1>Update Me <?php echo $model->statu_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>