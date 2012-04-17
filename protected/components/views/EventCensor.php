<?php
yii::import("application.components.functions", true);
$function = new functions();
?>

<div id="pending_event" class="col_sidebar">
<span class="col_title">Sự kiện chờ xét duyệt</span>
<ul class="row_event">
<?php foreach ($model as $row):?>
<li class="clear">
<?php echo CHtml::link('<img alt="" src="'.Yii::app()->request->baseUrl.'/images/thumbnail/'.$row['thumbnail'].'" width = 35px height = 34px/>', array('/event/view', 'id'=>$row['id']));?>
<p><?php echo CHtml::link($function->CutString($row['name'],65), array('/event/view', 'id'=>$row['id']), array('class'=>'is_link'));?></p>
<div class="clear"></div>
</li>
<?php endforeach;?>
</ul>

</div>