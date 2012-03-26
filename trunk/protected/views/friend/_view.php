<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user1_id')); ?>:</b>
	<?php echo CHtml::encode($data->user1_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user2_id')); ?>:</b>
	<?php echo CHtml::encode($data->user2_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request')); ?>:</b>
	<?php echo CHtml::encode($data->getTypeFriendText()); ?>
	<br />




</div>