<?php
$this->breadcrumbs=array(
	'Userprofiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userprofiles', 'url'=>array('index')),
	array('label'=>'Manage Userprofiles', 'url'=>array('admin')),
);
?>

<h1>Create Userprofiles</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>