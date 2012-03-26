<?php
$this->breadcrumbs=array(
	'Userprofiles'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Userprofiles', 'url'=>array('index')),
	array('label'=>'Create Userprofiles', 'url'=>array('create')),
	array('label'=>'View Userprofiles', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Userprofiles', 'url'=>array('admin')),
);
?>

<h1>Update Userprofiles <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>