<?php
$this->breadcrumbs=array(
	'Videos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Video', 'url'=>array('index')),
	array('label'=>'Manage Video', 'url'=>array('admin')),
);
?>



<?php

print('<div id="latest_event"  >
            <span class="col_title">Đăng video </span>');
 echo $this->renderPartial('_form', array('model'=>$model));
 
print('</div>'); 
 
  ?>