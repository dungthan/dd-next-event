<?php
$this->breadcrumbs=array(
	'Comment Mes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CommentMe', 'url'=>array('index')),
	array('label'=>'Create CommentMe', 'url'=>array('create')),
	array('label'=>'View CommentMe', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CommentMe', 'url'=>array('admin')),
);
?>

<h1>Update CommentMe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>