<?php
$this->breadcrumbs=array(
	'Events',
);

$this->menu=array(
	array('label'=>'Create Event', 'url'=>array('create')),
	array('label'=>'Manage Event', 'url'=>array('admin')),
);
?>
<div id="latest_event">
<span class="col_title">Event chưa kiểm duyệt</span>
<?php
echo "Xin Chao` ".Yii::app()->user->name ;
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
</div>

<div id="latest_event">
<span class="col_title">Event đã kiểm duyệt</span>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProviderCensor,
	'itemView'=>'_view',
)); ?>
</div>