<?php
$this->breadcrumbs=array(
	'Typevideos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Typevideo', 'url'=>array('index')),
	array('label'=>'Create Typevideo', 'url'=>array('create')),
	array('label'=>'View Typevideo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Typevideo', 'url'=>array('admin')),
);
?>

<h1>Update Typevideo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>