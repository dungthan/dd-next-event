
<div id="latest_event">
    <span class="col_title">tìm kiếm sự kiện</span>
<?php 
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$model->search(),
		'ajaxUpdate'=>false,
		'itemView'=>'_searchevent',
	));
?>
</div>