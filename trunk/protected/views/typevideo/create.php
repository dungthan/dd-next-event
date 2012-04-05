<?php
$this->breadcrumbs=array(
	'Typevideos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Typevideo', 'url'=>array('index')),
	array('label'=>'Manage Typevideo', 'url'=>array('admin')),
);
?>

<h1>Create Typevideo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>