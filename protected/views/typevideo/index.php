<?php
$this->breadcrumbs=array(
	'Typevideos',
);

$this->menu=array(
	array('label'=>'Create Typevideo', 'url'=>array('create')),
	array('label'=>'Manage Typevideo', 'url'=>array('admin')),
);
?>

<h1>Typevideos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
