<?php
$this->breadcrumbs=array(
	'Userprofiles'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'Update Userprofiles', 'url'=>array('update', 'id'=>$model->user_id)),    
    array('label'=>'Avatar', 'url'=>array('avatar')),
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
