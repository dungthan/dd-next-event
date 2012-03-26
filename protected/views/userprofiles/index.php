<?php
$this->breadcrumbs=array(
	'Userprofiles',
);

$this->menu=array(
	array('label'=>'Create Userprofiles', 'url'=>array('create')),
	array('label'=>'Manage Userprofiles', 'url'=>array('admin')),
);
?>

<h1>Userprofiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
