﻿
<?php 
$UserId2 = $id ;
$model1 = Friend::model()->findAll();
    if($UserId2 == Yii::app()->user->id){
        $Ids = Friend::model()->findAllByAttributes(array( 'user2_id'=>$UserId2,'request'=>'1'));
        foreach($Ids as $Id ){
            echo '<div class="view">';
			$name1 = Userprofiles::model()->findByPk($Id['user1_id']);
            if($name1->avatar=='unknown'){
                $link1 = CHtml::link('<img alt="'.$name1->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/noavatar.gif" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name1->user_id),array('class'=>'is_link'));
                echo $link1." là ".$Id->getTypeFriendText();
            }else{
    		    $link1 = CHtml::link('<img alt="'.$name1->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$name1->avatar.'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name1->user_id),array('class'=>'is_link'));
                echo $link1." là ".$Id->getTypeFriendText();
            }
            echo '</div>';
        }
            
        $Ids1 = Friend::model()->findAllByAttributes(array('user1_id'=>$UserId2 ,'request'=>'1'));
        foreach($Ids1 as $Id1 ){
            echo '<div class="view">';
			$name2 = Userprofiles::model()->findByPk($Id1['user2_id']);
            if($name2->avatar=='unknown'){
    			$link2 = CHtml::link('<img alt="'.$name2->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/noavatar.gif" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name2->user_id),array('class'=>'is_link'));
                echo $link2." là ".$Id1->getTypeFriendText();
            }else{
                $link2 = CHtml::link('<img alt="'.$name2->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$name2->avatar.'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name2->user_id),array('class'=>'is_link'));
                echo $link2." là ".$Id1->getTypeFriendText();
            }
            echo '</div>';
        }
   }else{
        $Ids = Friend::model()->findAllByAttributes(array( 'user2_id'=>$UserId2,'request'=>'1'));
        foreach($Ids as $Id ){
            echo '<div class="view">';
			$name2 = Userprofiles::model()->findByPk($Id['user2_id']);
            if($name2->avatar=='unknown'){
    			$link2 = CHtml::link('<img alt="'.$name2->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/noavatar.gif" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name2->user_id),array('class'=>'is_link'));			
                echo $link2." là ".$Id->getTypeFriendText();
            }else{
           	    $link2 = CHtml::link('<img alt="'.$name2->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$name2->avatar.'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name2->user_id),array('class'=>'is_link'));			
                echo $link2." là ".$Id->getTypeFriendText();
            }
            echo '</div>';
        }
            
        $Ids1 = Friend::model()->findAllByAttributes(array('user1_id'=>$UserId2 ,'request'=>'1'));
        foreach($Ids1 as $Id1 ){
            echo '<div class="view">';
            $name2 = Userprofiles::model()->findByPk($Id1['user2_id']);
		    if($name2->avatar=='unknown'){
    			$link2 = CHtml::link('<img alt="'.$name2->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/noavatar.gif" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name2->user_id),array('class'=>'is_link'));			
                echo $link2." là ".$Id1->getTypeFriendText();
            }else{
           	    $link2 = CHtml::link('<img alt="'.$name2->display_name.'" src="'.Yii::app()->request->baseUrl.'/avatar/'.$name2->avatar.'" width = 35px height = 34px/>', array('/userprofiles/view', 'id'=>$name2->user_id),array('class'=>'is_link'));			
                echo $link2." là ".$Id1->getTypeFriendText();
            }
            echo '</div>';
        }
   }
?>

