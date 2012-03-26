<?php
$this->breadcrumbs=array(
	'Comment Mes',
);

$this->menu=array(
	array('label'=>'Create CommentMe', 'url'=>array('create')),
	array('label'=>'Manage CommentMe', 'url'=>array('admin')),
);
?>

<h1>Comment Mes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
