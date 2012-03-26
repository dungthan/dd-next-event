<?php
$this->breadcrumbs=array(
	'Comment Mes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CommentMe', 'url'=>array('index')),
	array('label'=>'Manage CommentMe', 'url'=>array('admin')),
);
?>

<h1>Create CommentMe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>