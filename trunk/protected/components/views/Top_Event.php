﻿<?php
yii::import("application.components.functions", true);
$function = new functions();
?>
<div id="top_event" class="clear">
	<?php foreach ($model as $row):?>
		<?php 
		$time = getdate(strtotime($row['start_time']));
		$date = "Ngày ".$time["mday"]." tháng ".$time["mon"]." năm ".$time["year"];
		?>
        <div class="col_top_event">
        <?php echo CHtml::link('<img alt="" src="'.Yii::app()->request->baseUrl.'/images/thumbnail/'.$row['thumbnail'].'" width = 140px height = 70px/>', array('/event/view', 'id'=>$row['id']));?>
		<p><?php echo CHtml::link($function->CutString($row['name'],35), array('/event/view', 'id'=>$row['id']), array('class'=>'is_link'));?></p>
        <p class="date"><?php echo $date;?></p>
        </div>
	<?php endforeach;?>
</div>
                