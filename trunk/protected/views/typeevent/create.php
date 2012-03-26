<?php
$this->breadcrumbs=array(
	'Typeevents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Typeevent', 'url'=>array('index')),
	array('label'=>'Manage Typeevent', 'url'=>array('admin')),
);
?>

<h1>Create Typeevent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>