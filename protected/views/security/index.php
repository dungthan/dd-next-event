<?php
$this->breadcrumbs=array(
	'Securities',
);

$this->menu=array(
	array('label'=>'Create Security', 'url'=>array('create')),
	array('label'=>'Manage Security', 'url'=>array('admin')),
    array('label'=>'Security', 'url'=>array('security')),
);
?>

<h1>Securities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
