<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
);
$this->menu=array(
	array('label'=>'List Event', 'url'=>array('index')),
	array('label'=>'Create Event', 'url'=>array('create')),
	array('label'=>'Update Event', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Change Thumbnail', 'url'=>array('thumbnail', 'id'=>$model->id)),
	array('label'=>'Delete Event', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Event', 'url'=>array('admin')),
);
?>
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
<?php endif ;?>


<?php /*
$this->widget('SimpleShare', array(
    'pageTitle' => 'The title of the page.',
    'pageDescription' => 'The long descriptions of the page.',
)); */
?>
    <span class="event_title"><?php echo $model->name ;?></span>
    <div class="event_content">
    <span class="col_title">Thông tin chung</span>
        <p class="event_content_01">
        Tạo bởi:
        <?php
            $name = Userprofiles::model()->findByPk($model->create_user_id);
            echo CHtml::link(CHtml::encode($name->display_name), array('/userprofiles/view', 'id'=>$name->user_id),array('class'=>"is_link")).", ";
       ?>
       </p>
        <p class="event_content_01">Số lượt xem: <?php echo $model->view?></p>
        <p class="event_content_01">Loại sự kiện: 
        <?php 
            $_model = Typeevent::model()->findByPk($model->typeevent_id);
            echo CHtml::link($_model->name,array('event/category','type'=>$_model->name),array('class'=>'is_link'));         
        ?>
        </p>
        <div class="clear "></div>
        <table>
        <tr>
            <td>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/thumbnail/<?php echo $model->thumbnail ;?>" class="clear" />
<?php if ($model->checkLike($model->id, Yii::app()->user->id) === false):
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'like-form',
	'enableAjaxValidation'=>false,
)); 
if (Yii::app()->user->id !== NULL):
       echo $form->hiddenField($like,'user_id', array('value'=>Yii::app()->user->id));
	   echo CHtml::submitButton('thích',array('class'=>'small white button')); 
endif;
foreach ($str_like as $line):
       $name = Userprofiles::model()->findByPk($line['user_id']);
       echo CHtml::link(CHtml::encode($name->display_name), array('/userprofiles/view', 'id'=>$name->user_id),array('class'=>"is_link")).", ";
endforeach;
$this->endWidget();
endif;
?>
<?php
if ($model->checkLike($model->id, Yii::app()->user->id) === true):
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'like-form',
	'enableAjaxValidation'=>false,
)); 
if (Yii::app()->user->id !== NULL):
    echo $form->hiddenField($like,'user_id', array('value'=>Yii::app()->user->id));
    echo CHtml::submitButton('Không thích',array('class'=>'small white button'));
    echo CHtml::link(CHtml::encode("Bạn"), array('/userprofiles/view', 'id'=>Yii::app()->user->id),array('class'=>"is_link")).", ";
endif;
foreach ($str_like as $line):
     $name = Userprofiles::model()->findByPk($line['user_id']);
     echo CHtml::link(CHtml::encode($name->display_name), array('/userprofiles/view', 'id'=>$name->user_id),array('class'=>"is_link")).", ";
endforeach;
echo " đã like event";
$this->endWidget();
endif; ?>
            </td>
            <td><p class="event_content_02">Thời gian: Bắt đầu <?php echo $model->start_time ;?> <br />Kết thúc: <?php echo $model->end_time ;?></p>
            <p class="event_content_02">Địa điểm: <?php echo $model->place ;?></p>
            <p class="event_content_02"><a href="" class="like">54</a><a href="" class="dislike">10</a></p>
            
            </td>
        </tr>
        
        </table>
    </div>
    <div class="advertisment clear"></div>
    <div class="event_detail">
    <span class="col_title">Giới thiệu</span>
        <?php echo $model->content?>
    </div>
    
<?php  if(Yii::app()->user->name=='admin'){ 
            echo $this->renderPartial('_censor', array('model'=>$model));
            echo CHtml::button('Hủy',array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Bạn có muốn hủy sự kiện này' ));
} ?>
