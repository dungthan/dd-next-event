<?php
$this->breadcrumbs=array(
	'Userprofiles'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List Userprofiles', 'url'=>array('index')),
	array('label'=>'Create Userprofiles', 'url'=>array('create')),
	array('label'=>'Update Userprofiles', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete Userprofiles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userprofiles', 'url'=>array('admin')),
);
?>

<h1>View Userprofiles #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'display_name',
		'first_name',
		'last_name',
		'company',
		'lang',
		'bio',
		'bod',
		'gender',
		'phone',
		'mobile',
		'address_line1',
		'address_line2',
		'address_line3',
		'yim_handle',
		'skype_handle',
		'avatar',
		'facebooksite',
		'update_on',
	),
)); ?>
