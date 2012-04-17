<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Event', 'url'=>array('index')),
	array('label'=>'Manage Event', 'url'=>array('admin')),
);
?>

<div id="latest_event">
<span class="col_title">Tạo mới sự kiện</span>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>