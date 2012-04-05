<?php
$this->breadcrumbs=array(
	'Securities'=>array('index'),
	'Security',
);

$this->menu=array(
	array('label'=>'List Security', 'url'=>array('index')),
	array('label'=>'Create Security', 'url'=>array('create')),
	array('label'=>'View Security', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Security', 'url'=>array('admin')),
);
?>

<h1>Update Security <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>