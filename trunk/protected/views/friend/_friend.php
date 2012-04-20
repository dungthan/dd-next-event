
<?php 

        $IdUser = Yii::app()->user->id; 
        $UserId2 = $id ; 
        $Ids = Friend::model()->findAllByAttributes(array('user2_id'=>$UserId2,'request'=>'0'));
        $ListId = array();
        $stt=0;
        foreach($Ids as $Id ): 
            $stt++; $mydialog = 'mydialog'.$stt;
            echo '<div class="view">';
			$name1 = Userprofiles::model()->findByPk($Id['user1_id']);
			//$link1 = CHtml::link(CHtml::encode($name1->display_name), array('/userprofiles/view', 'id'=>$name1->user_id));		
            echo CHtml::link('<img alt="'.$name1->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$name1->avatar.'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name1->user_id),array('class'=>'is_link'));
            echo " ".CHtml::encode($Id->getTypeFriendText())."<br/>";
            $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        	'id'=>$mydialog,
        	'options'=>array(
        		'title'=>'Kết bạn',
                'width'=>100,
                'height'=>150,
        		'autoOpen'=>false,
        		'modal'=>true,
                'resizable'=>false,
                'closeOnEscape' => true,		
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
            echo CHtml::submitButton('Kết Bạn', array(	'onclick'=>'$("#mydialog1").dialog("open"); return false;',));          
            echo CHtml::button('Hủy yêu cầu',array('submit'=>array('delete','id'=>$Id['id']),'confirm'=>'Bạn có muốn hủy yêu cầu kết bạn' ),array('class'=>'small white button'));
            echo '</div>';            
       endforeach;
?>

