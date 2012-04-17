<?php
yii::import("application.components.functions", true);
$function = new functions();
?>
<div id="active_event" class="col_sidebar">
<span class="col_title">Hoạt động vừa diễn ra</span>
<ul>
<?php foreach ($model as $row) :?>
<?php  ?>
<li class="active_content clear">
<?php
    $ID = Yii::app()->db->createCommand("SELECT display_name,avatar FROM tbl_userprofiles WHERE user_id='".$row['user_id']."'")->queryRow();
	echo CHtml::link('<img alt="'.$ID['display_name'].'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$ID['avatar'].'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$row['user_id']));
?>
<br />
<p><a class="is_link"><?php echo CHtml::link($ID['display_name'], array('/userprofiles/view', 'id'=>$row['user_id']),array('class'=>'is_link')) ;?></a> <?php echo $row->action ;?>
<a class="is_link"><?php echo CHtml::link($function->CutString($row->name_action,25),$row->link,array('class'=>'is_link')) ;?></a></p>
</li>

<?php endforeach;?>
</ul>
</div>