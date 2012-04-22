<?php
yii::import("application.components.functions", true);
$function = new functions();
?>
<div id="latest_event" >
<span class="col_title">Sự kiện sắp diễn ra</span>
<?php foreach ($model as $row):?>
<div class="col_lastest_event clear">
    <ul class="event_time">
		<?php
            $date = $function->time_date($row['start_time']);
			$current = $function->time_hms($row['start_time']);
			$month = $function->time_month($row['start_time']);
		?>
        <li class="event_time_time"><?php echo $current;?></li>
        <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/<?php echo $date;?>.gif" /></li>
        <li class="event_time_month"><?php echo "Tháng $month";?></li>
    </ul>
	<p><?php echo CHtml::link($function->CutString($row['name'],50), array('/event/view', 'id'=>$row['id']), array('class'=>'is_link event_title'));?></p>
    <p><?php echo $row['place'];?></p>
	<p><?php echo CHtml::link($row->createUser->username , array('/userprofiles/view', 'id'=>$row['create_user_id']), array('class'=>'is_link is_creator'));?>  |  <?php echo $row->typeevent->name;?>  |  <?php echo $row['view']." lượt xem";?></p>
</div>
<span class="col_title1"></span>
<?php endforeach;?>
</div>