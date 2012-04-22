<?php
$this->breadcrumbs=array(
	'Userprofiles'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Thông tin cá nhân',
);

$this->menu=array(
	array('label'=>'List Userprofiles', 'url'=>array('index')),
	array('label'=>'View Userprofiles', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Userprofiles', 'url'=>array('admin')),
);
?>

<h1>Thay đổi thông tin cá nhân <?php echo $model->display_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>