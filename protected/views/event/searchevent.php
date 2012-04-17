
<?php 
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$model->search(),
		'ajaxUpdate'=>false,
		'itemView'=>'_searchevent',
	));
?>