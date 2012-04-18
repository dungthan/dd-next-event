
<div id="user_panel" class="col_sidebar">
    <span class="col_title">Thông tin Thành viên</span>
    <?php if ( $model->avatar == 'unknown') {?>
		<?php echo CHtml::link('<img alt="'.$model->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/noavatar.gif" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$model->user_id));?>
	<?php } else { ?>
	   <?php echo CHtml::link('<img alt="'.$model->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$model->avatar.'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$model->user_id)); }?>
    <?php echo CHtml::link($model->display_name,array('/userprofiles/view', 'id'=>$model->user_id),array('class'=>'is_link')) ;?>
    
    <p>Email: <?php echo CHtml::mailto($model->user->email) ;?></p>
    <ul>
       
        <li><?php echo CHtml::link('Tường',array('me/me','id'=>Yii::app()->user->id),array('class'=>'is_link'));?></li>
        <li><?php echo CHtml::link('Bạn Bè',array('friend/friend','id'=>Yii::app()->user->id),array('class'=>'is_link'));?></li>
        <li><?php echo CHtml::link('Đăng Video',array('video/create'),array('class'=>'is_link'));?></li>
        <li><?php echo CHtml::link('My Video',array('video/video','id'=>Yii::app()->user->id),array('class'=>'is_link'));?></li>
       <li><?php echo CHtml::link('Cấu hình',array('security/security'),array('class'=>'is_link'));?></li>
       <li><?php echo CHtml::link('Đổi password',array('user/changepass'),array('class'=>'is_link'));?></li>
        <li><?php echo CHtml::link('Tổng số bài đăng',array('event/totalpost'),array('class'=>'is_link'));?></li>
         <li><?php echo CHtml::link('Thông tin cá nhân',array('userprofiles/displayprofile','id'=>Yii::app()->user->id),array('class'=>'is_link'));?></li>
        <li><?php echo CHtml::link('Thoát('.Yii::app()->user->name.')',array('site/logout'),array('class'=>'is_link'));?></li>
    </ul>
</div>