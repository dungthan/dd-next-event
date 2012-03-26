<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'ChangePass', 'url'=>array('changepass')),
	array('label'=>'bạn bè', 'url'=>array('friend/friend', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<!---Show message---->
<h1>View User #<?php echo $model->username ; ?></h1>
<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 3.0}, 3000).fadeOut("view");',
       CClientScript::POS_READY
    );
?>
 
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>      
<?php else :?>
<?php if(Yii::app()->user->hasFlash('error')):?>
<div class="flash-success">
        <?php echo Yii::app()->user->getFlash('error'); ?>
</div>  
<?php else :?>
<!----Compare  user , and whow button friend  , Yes or No ^^ mr.richdad----->
<?php 

if ($CountRequest == 0 ){
    if(Yii::app()->user->id != $model->id and $CountRequest1 == 0 ) {
?>
<div class="buttons">
<?php 
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'friend-form',
	'enableAjaxValidation'=>false,
)); 
    echo $form->hiddenField($Friends,'user1_id');
    echo $form->hiddenField($Friends,'user2_id');
    echo CHtml::submitButton($Friends->isNewRecord ? 'Kết Bạn' : 'Kết Bạn');

 $this->endWidget();
?>
</div>

<?php  }  } ?>

<?php endif ; ?>
<?php endif ;?><!------END IF----->

<?php 
if(Yii::app()->user->id != $model->id){if( $CountRequest != 0 ) echo "<h1>Chưa Xác Nhận</h1>" ;}
if($StatusFriend==1) echo "<h1>Bạn Bè</h1>" ;
if($StatusFriend==2) echo "<h1>Bạn Thân<h1/>" ;
if($StatusFriend==3) echo "<h1>Gia Đình<h1/>" ;

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'block',
		'activation',
		'last_login_time',
		'create_time',
	),
)); ?>
<!--Load button Friend-->
 <script type="text/javascript"src="http://code.jquery.com/jquery-latest.js"> </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#buttons').click(function() {
                location.reload();
            });
        });     
    </script>




