<?php
yii::import("application.components.functions", true);
$function = new functions();
?>

    <div class="col_lastest_event clear">
    <ul class="event_time">
		<?php $time = getdate(strtotime($data->start_time));
			if ($time["hours"] < 10)
				$hour = "0".$time["hours"];
			if ($time["minutes"] < 10)
				$minute = "0".$time["minutes"];
			if ($time["mday"] < 10)
				$date = "0".$time["mday"];
			else
				$date = $time["mday"];
			$current = $hour . ":" . $minute;
			$month = $time["mon"];
		?>
        <li class="event_time_time"><?php echo $current;?></li>
        <li class="event_time_date"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/date/<?php echo $date;?>.gif" /></li>
        <li class="event_time_month"><?php echo "Tháng $month";?></li>
    </ul>
	<p><?php echo CHtml::link($function->CutString($data->name,50), array('/event/view', 'id'=>$data->id), array('class'=>'is_link event_title'));?></p>
    <p><?php echo $data->place;?></p>
	<p><?php echo CHtml::link($data->createUser->username , array('/userprofiles/view', 'id'=>$data->create_user_id), array('class'=>'is_link is_creator'));?>  |  <?php echo $data->typeevent->name;?>  |  <?php echo $data->view." lượt xem";?></p>
</div>
<span class="col_title1"></span>
