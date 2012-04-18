 <div id="new_mem" class="col_sidebar">
<span class="col_title">Thành viên mới nhất</span>
<ul class="list_mem">
<?php foreach ($model as $row):?>
<?php if ( $row->userprofiles->avatar == 'unknown') {?>
	<li><?php echo CHtml::link('<img alt="'.$row->userprofiles->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/noavatar.gif" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$row['id']));?></li>
<?php } else { ?>
   <li><?php echo CHtml::link('<img alt="'.$row->userprofiles->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$row->userprofiles->avatar.'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$row['id']));?></li>
<?php } endforeach;?>
</ul>
</div>