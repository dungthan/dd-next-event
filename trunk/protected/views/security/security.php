<?php
$this->breadcrumbs=array(
	'Securities'=>array('index'),
	'Security',
);

$this->menu=array(
	array('label'=>'List Security', 'url'=>array('index')),
	array('label'=>'Create Security', 'url'=>array('create')),
	array('label'=>'View Security', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Security', 'url'=>array('admin')),
);
?>

<?php 
print('<div id="latest_event"  >
            <span class="col_title">Cấu hình riêng tư : '.$model->user->username.' </span>');
echo $this->renderPartial('_form', array('model'=>$model)); 
print('</div>');
?>

