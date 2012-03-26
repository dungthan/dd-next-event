<?php
$this->breadcrumbs=array(
	'Like Status',
);

$this->menu=array(
	array('label'=>'Create LikeStatu', 'url'=>array('create')),
	array('label'=>'Manage LikeStatu', 'url'=>array('admin')),
);
?>

<h1>Like Status</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
