<?php

$this->breadcrumbs = array(
    'Videos',
);

$this->menu = array(
    array('label' => 'Create Video', 'url' => array('create')),
    array('label' => 'Manage Video', 'url' => array('admin')),
);
?>
<li><?php echo CHtml::link('tất cả video', array('video/index'), array('class' => 'is_link')); ?></li>
<li><?php echo CHtml::link('video của tôi', array('video/myvideo'), array('class' => 'is_link')); ?></li>
<li><?php echo CHtml::link('đăng video', array('video/create'), array('class' => 'is_link')); ?></li>
<?php
/*
print('<div id="latest_event"  >
            <span class="col_title">Tất cả video </span>');
 */
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));

//print('</div>');
?>
