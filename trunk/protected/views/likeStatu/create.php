<?php
$this->breadcrumbs=array(
	'Like Status'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LikeStatu', 'url'=>array('index')),
	array('label'=>'Manage LikeStatu', 'url'=>array('admin')),
);
?>

<h1>Create LikeStatu</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>