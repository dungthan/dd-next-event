
    <div class="event_content">
    <span class="col_title">Tất cả sự kiện mới</span>
<?php

 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 

?>
</div>