<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userprofile')); ?>:</b>
	<?php echo CHtml::encode($data->userprofile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('myvideo')); ?>:</b>
	<?php echo CHtml::encode($data->myvideo); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('friend')); ?>:</b>
	<?php echo CHtml::encode($data->friend); ?>
	<br />

</div>