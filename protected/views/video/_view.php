<div class="view">

	<b><?//php echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
	<?//php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	<?php $_link = strstr($data->link, "v=");?>
	<?php $img_link = substr($_link, 2, 11);?>
	<b><?//php echo CHtml::encode($data->getAttributeLabel('link_url')); ?></b>
	<?php echo CHtml::link('<img height="100" width="150" src="http://img.youtube.com/vi/'.$img_link.'/0.jpg"',
	        array('view', 'id'=>$data->id)); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('permission')); ?>:</b>
	<?php echo CHtml::encode($data->permission); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('view')); ?>:</b>
	<?php echo CHtml::encode($data->view); ?>
	<br />
	<?php if (Yii::app()->user->id === $data->create_user_id):?>
        <?php echo CHtml::link("Update", array('update', 'id'=>$data->id));
                echo "or";
                echo CHtml::link("Delete", array('del', 'id'=>$data->id));
        ?>
        <?php endif;?>
        

</div>
