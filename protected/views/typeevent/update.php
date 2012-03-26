<?php
$this->breadcrumbs=array(
	'Typeevents'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Typeevent', 'url'=>array('index')),
	array('label'=>'Create Typeevent', 'url'=>array('create')),
	array('label'=>'View Typeevent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Typeevent', 'url'=>array('admin')),
);
?>

<h1>Update Typeevent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>