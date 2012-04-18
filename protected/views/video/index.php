<?php
$this->breadcrumbs=array(
	'Videos',
);

$this->menu=array(
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'Manage Video', 'url'=>array('admin')),
);
?>

<?php

print('<div id="latest_event"  >
            <span class="col_title">My video </span>');
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
 
print('</div>');


  ?>
