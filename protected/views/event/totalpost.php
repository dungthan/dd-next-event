<?php
$this->breadcrumbs=array(
	'Events',
);

$this->menu=array(
	array('label'=>'Create Event', 'url'=>array('create')),
	array('label'=>'Manage Event', 'url'=>array('admin')),
);
?>

<?php
echo "Xin Chao` ".Yii::app()->user->name ;
 echo "<h1>Event chưa kiểm duyệt</h1>";

 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>


<h1>Event đã kiểm duyệt</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProviderCensor,
	'itemView'=>'_view',
)); ?>