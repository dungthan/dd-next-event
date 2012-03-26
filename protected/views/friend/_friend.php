
<?php 

        $IdUser = Yii::app()->user->id; 
        $UserId2 = $id ; 
        $Ids = Friend::model()->findAllByAttributes(array('user2_id'=>$UserId2,'request'=>'0'));
        $ListId = array();
        foreach($Ids as $Id ):
            echo '<div class="view">';
			$name1 = Userprofiles::model()->findByPk($Id['user1_id']);
			$link1 = CHtml::link(CHtml::encode($name1->display_name), array('/userprofiles/view', 'id'=>$name1->user_id));		
            echo $link1." ".CHtml::encode($Id->getTypeFriendText())."<br/>";
            $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        	'id'=>'mydialog',
        	'options'=>array(
        		'title'=>'Kết bạn',
                'width'=>100,
                'height'=>150,
        		'autoOpen'=>false,
        		'modal'=>true,
                'resizable'=>false,
                'closeOnEscape' => false,		
            	),
             ));
            $modelId=$this->loadModel($Id['id']);
            $modelId->request = '1';
    		if(isset($_POST['Friend']))
    		{
    			$modelId->attributes=$_POST['Friend'];
    			if($modelId->save())
    				$this->redirect(array('friend','id'=>$IdUser));
    		}
            echo $this->renderPartial('_form',array('model'=>$modelId));  
         
         $this->endWidget('zii.widgets.jui.CJuiDialog');
            echo CHtml::submitButton('Kết Bạn', array(	'onclick'=>'$("#mydialog").dialog("open"); return false;',));
            
            echo CHtml::button('Delete',array('submit'=>array('delete','id'=>$Id['id']),'confirm'=>'Bạn có muốn hủy yêu cầu kết bạn' ));
            echo '</div>';            
       endforeach;
?>

