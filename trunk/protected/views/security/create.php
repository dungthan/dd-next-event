<?php
$this->breadcrumbs=array(
	'Securities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Security', 'url'=>array('index')),
	array('label'=>'Manage Security', 'url'=>array('admin')),
);

?>

<h1>Create Security</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>