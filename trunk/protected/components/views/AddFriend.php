
<script type="text/javascript" >
$(function() 
{
$(".delete").click(function(){
var element = $(this);
var I = element.attr("id");
$('li#list'+I).fadeOut('slow', function() {$(this).remove();});		
return false;
});
});
</script>
  
<ul id="addfriend">
<span class="col_title">Bạn có quen người này?</span>
<?php $stt= 0; foreach ($model as $row): $stt++ ;?>
<li id="list<?php echo $stt ;?>">
<?php if ( $row->userprofiles->avatar == 'unknown') {?>
	<?php echo CHtml::link('<img alt="'.$row->userprofiles->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/noavatar.gif" width = 35px height = 34px/>', array('/me/me', 'id'=>$row['id']));?>
    <span class="del"><a href="#" class="delete" title="Bỏ Qua" id="<?php echo $stt ;?>">x</a></span>
    <?php echo CHtml::link($row->userprofiles->display_name,array('/me/me', 'id'=>$row['id']),array('class'=>'is_link')) ?>
    <span class="addas"><?php 
        $form=$this->beginWidget('CActiveForm', array(
        	'id'=>'friend-form',
        	'enableAjaxValidation'=>false,
        )); 
            echo $form->hiddenField($Friends,'user1_id',array('value'=>Yii::app()->user->id));
            echo $form->hiddenField($Friends,'user2_id',array('value'=>$row['id']));
            echo CHtml::submitButton($Friends->isNewRecord ? 'Kết Bạn' : 'Kết Bạn',array('class'=>'small blue button'));      
         $this->endWidget();
         ?></span>
<?php } else { ?>
    <?php echo CHtml::link('<img alt="'.$row->userprofiles->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$row->userprofiles->avatar.'" width = 35px height = 34px/>', array('/me/me', 'id'=>$row['id']),array('class'=>'is_link'));?>
        <span class="del"><a href="#" class="delete" title="Bỏ Qua" id="<?php echo $stt ;?>">x</a></span>
		<?php echo CHtml::link($row->userprofiles->display_name,array('/me/me', 'id'=>$row['id']),array('class'=>'is_link')) ?>
		<span class="addas"><?php 
        $form=$this->beginWidget('CActiveForm', array(
        	'id'=>'friend-form',
        	'enableAjaxValidation'=>false,
        )); 
            echo $form->hiddenField($Friends,'user1_id',array('value'=>Yii::app()->user->id));
            echo $form->hiddenField($Friends,'user2_id',array('value'=>$row['id']));
            echo CHtml::submitButton($Friends->isNewRecord ? 'Kết Bạn' : 'Kết Bạn',array('class'=>'small blue button'));      
         $this->endWidget();
         ?></span>
</li>
<?php } endforeach;?>
</ul>


