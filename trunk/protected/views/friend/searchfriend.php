<h1>Search Friend</h1>
<?php 
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$model->search(),
		'ajaxUpdate'=>false,
		'itemView'=>'/user/_view',
	));
?>