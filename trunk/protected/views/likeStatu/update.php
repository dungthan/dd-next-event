<?php
$this->breadcrumbs=array(
	'Like Status'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LikeStatu', 'url'=>array('index')),
	array('label'=>'Create LikeStatu', 'url'=>array('create')),
	array('label'=>'View LikeStatu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LikeStatu', 'url'=>array('admin')),
);
?>

<h1>Update LikeStatu <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>