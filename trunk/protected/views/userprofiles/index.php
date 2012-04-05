<?php
$this->breadcrumbs=array(
	'Userprofiles',
);

$this->menu=array(
	array('label'=>'displayprofile', 'url'=>array('displayprofile')),
	array('label'=>'Manage Userprofiles', 'url'=>array('admin')),
    array('label'=>'Avatar', 'url'=>array('avatar')),
);
?>

<h1>Userprofiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
