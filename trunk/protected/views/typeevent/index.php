<?php
$this->breadcrumbs=array(
	'Typeevents',
);

$this->menu=array(
	array('label'=>'Create Typeevent', 'url'=>array('create')),
	array('label'=>'Manage Typeevent', 'url'=>array('admin')),
);
?>

<h1>Typeevents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
