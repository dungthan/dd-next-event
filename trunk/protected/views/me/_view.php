
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permission')); ?>:</b>
	<?php echo CHtml::encode($data->permission); ?>
	<br />
<?php
// truy xuất ở bảng CommentMe với điều kiện statu_id = $data->statu_id;
$comment = CommentMe::model()->findAllByAttributes(array('statu_id'=>$data->statu_id));
if ($comment !== NULL) {
//lấy ra từng bản ghi 
foreach ($comment as $line): 
?>

        <div class="view">

	<b><?php echo "Create_user_id"; ?>:</b>
	<?php echo CHtml::encode($line['create_user_id']); ?>
	<br />

	<b><?php echo "content"; ?>:</b>
	<?php echo CHtml::encode($line['content']); ?>
	<br />

	<b><?php echo "create_time"; ?>:</b>
	<?php echo CHtml::encode($line['create_time']); ?>
	<br />

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
