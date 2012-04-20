<script >
function toggle2(showHideDiv, switchTextDiv) {
	var ele = document.getElementById(showHideDiv);
	var text = document.getElementById(switchTextDiv);
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Hiện tất cả";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Ẩn bình luận";
	}
}
</script>
<div class="view">

<div id="new_event" class="col_sidebar view"> 
<ul class="row_event">

<?php
    $Display_Name = Yii::app()->db->createCommand("SELECT display_name FROM tbl_userprofiles WHERE user_id='".$data->user_id."' ")->queryScalar();
    $Avatar = Yii::app()->db->createCommand("SELECT avatar FROM tbl_userprofiles WHERE user_id='".$data->user_id."' ")->queryScalar(); 
?>
<li class="clear">
<?php echo CHtml::link('<img alt="" src="'.Yii::app()->request->baseUrl.'/avatar/'.$Avatar.'" width = 35px height = 34px/>', array('userprofiles/displayprofile','id'=>$data->user_id));?>
<p style="padding-top: 10px;">
<?php  
    echo CHtml::link($Display_Name,array('userprofiles/displayprofile','id'=>$data->user_id),array('class'=>'is_link'));
    echo ": ".CHtml::encode($data->content)."<br/>";
    $time = getdate(strtotime($data->create_time));
    $date = "Ngày ".$time["mday"]." tháng ".$time["mon"]." năm ".$time["year"];
    echo $date."<br/>" ;
    if(Yii::app()->user->id == $data->user_id){
     echo CHtml::button('Hủy',array('submit'=>array('delete','id'=>$data->statu_id),'confirm'=>'Bạn có muốn hủy sự kiện này' ));
     echo CHtml::button('Sửa',array('submit'=>array('update','id'=>$data->statu_id)));
     }
?></p>
<div class="clear"></div>
</li>
</ul>
</div>
<!------SHOWWWWW------>
<?php 
    $totalComment = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_comment_me WHERE statu_id = {$data->statu_id}")->queryScalar(); 
    echo " ".$totalComment." bình luận " ;
?>
<a class="is_link" id="myHeader<?php echo $data->statu_id ;?>" href="javascript:toggle2('comment<?php echo $data->statu_id ;?>','myHeader<?php echo $data->statu_id ;?>');" >Hiện tất cả</a>
<div  id="comment<?php echo $data->statu_id ;?>" style="display:none">
<?php
// truy xuất ở bảng CommentMe với điều kiện statu_id = $data->statu_id;
$comment = CommentMe::model()->findAllByAttributes(array('statu_id'=>$data->statu_id));
if ($comment !== NULL) {
//lấy ra từng bản ghi 
foreach ($comment as $line): 
?>
<div id="new_event" class="col_sidebar">
<ul class="row_event">
<?php
    $Display_Name = Yii::app()->db->createCommand("SELECT display_name FROM tbl_userprofiles WHERE user_id='".$line['create_user_id']."' ")->queryScalar();
    $Avatar = Yii::app()->db->createCommand("SELECT avatar FROM tbl_userprofiles WHERE user_id='".$line['create_user_id']."' ")->queryScalar(); 
?>
<li class="clear">
<?php echo CHtml::link('<img alt="" src="'.Yii::app()->request->baseUrl.'/avatar/'.$Avatar.'" width = 35px height = 34px/>', array('userprofiles/displayprofile','id'=>$line['create_user_id']));?>
<p style="padding-top: 10px;">
<?php  
    echo CHtml::link($Display_Name,array('userprofiles/displayprofile','id'=>$line['create_user_id']),array('class'=>'is_link'));
    echo ": ".CHtml::encode($line['content'])."<br/>";
    $time = getdate(strtotime($line['create_time']));
    $date = "Ngày ".$time["mday"]." tháng ".$time["mon"]." năm ".$time["year"];
    echo $date ;
?></p>
<div class="clear"></div>
</li>
</ul>
</div>

<?php
endforeach;
}
?>

<?php if (Yii::app()->user->id!==null):?>
    <?php 
        $model = new CommentMe;
        if (isset($_POST['CommentMe']))
        {
                
                $model->attributes = $_POST['CommentMe'];
                if ($model->content !== "") 
                {
                        if ($model->save())
                        {       
                                $action = new Action ;
                                
                                $Display_Name = Yii::app()->db->createCommand("SELECT display_name FROM tbl_userprofiles WHERE user_id='".$data->user_id."' ")->queryScalar(); 
                                $url = 'http://'.Yii::app()->request->getServerName();
                                $url .= CController::createUrl('me/me', array('id'=>$data->user_id));
                                
                                if($data->user_id != Yii::app()->user->id){
                                    $action->issertAction(Yii::app()->user->id,Yii::app()->user->id,'đã bình luận trên tường của',$Display_Name ,$url);
                                }else{
                                    $action->issertAction(Yii::app()->user->id,Yii::app()->user->id,'đã bình luận trên tường của','anh ấy',$url);
                                }
                                $this->redirect(array("me/me", 'id'=>$data->user_id));
                        }
                }
        }
    ?>
    <?php if (Yii::app()->user->hasFlash('commentSubmitted')):?>
    
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('commentSubmitted');?>
    </div>
    <?php $this->renderPartial('/commentMe/_form', array('model'=>$model, 'data'=>$data));?>
    <?php else: ?>
        <?php $this->renderPartial('/commentMe/_form', array('model'=>$model, 'data'=>$data));?>
    <?php endif;?>
    <?php endif; ?>
</div>
</div>
