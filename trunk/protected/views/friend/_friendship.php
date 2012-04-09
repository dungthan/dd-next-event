
<?php 
        $UserId2 = $id ;
        $model1 = Friend::model()->findAll();
    if($UserId2 == Yii::app()->user->id){
        $Ids = Friend::model()->findAllByAttributes(array( 'user2_id'=>$UserId2,'request'=>'1'));
        foreach($Ids as $Id ){
            echo '<div class="view">';
			$name1 = Userprofiles::model()->findByPk($Id['user1_id']);
			$name2 = Userprofiles::model()->findByPk($Id['user2_id']);
			$link1 = CHtml::link(CHtml::encode($name1->display_name), array('/userprofiles/view', 'id'=>$name1->user_id));
			$link2 = CHtml::link(CHtml::encode(' Bạn '), array('/userprofiles/view', 'id'=>$name2->user_id));			
            echo $link2." là ".CHtml::encode($Id->getTypeFriendText())." với ".$link1."<br/>";
            echo '</div>';
        }
            
        $Ids1 = Friend::model()->findAllByAttributes(array('user1_id'=>$UserId2 ,'request'=>'1'));
        foreach($Ids1 as $Id1 ){
            echo '<div class="view">';
			$name1 = Userprofiles::model()->findByPk($Id1['user1_id']);
			$name2 = Userprofiles::model()->findByPk($Id1['user2_id']);
			$link1 = CHtml::link(CHtml::encode(' Bạn '), array('/userprofiles/view', 'id'=>$name1->user_id));
			$link2 = CHtml::link(CHtml::encode($name2->display_name), array('/userprofiles/view', 'id'=>$name2->user_id));			
            echo $link1." là ".CHtml::encode($Id1->getTypeFriendText())." với ".$link2."<br/>";
            echo '</div>';
        }
   }else{
        $Ids = Friend::model()->findAllByAttributes(array( 'user2_id'=>$UserId2,'request'=>'1'));
        foreach($Ids as $Id ){
            echo '<div class="view">';
			$name1 = Userprofiles::model()->findByPk($Id['user1_id']);
			$name2 = Userprofiles::model()->findByPk($Id['user2_id']);
			$link1 = CHtml::link(CHtml::encode('Ban'), array('/userprofiles/view', 'id'=>$name1->user_id));
			$link2 = CHtml::link(CHtml::encode($name2->display_name), array('/userprofiles/view', 'id'=>$name2->user_id));			
            echo $link2." là ".CHtml::encode($Id->getTypeFriendText())." với ".$link1."<br/>";
            echo '</div>';
        }
            
        $Ids1 = Friend::model()->findAllByAttributes(array('user1_id'=>$UserId2 ,'request'=>'1'));
        foreach($Ids1 as $Id1 ){
            echo '<div class="view">';
			$name1 = Userprofiles::model()->findByPk($Id1['user1_id']);
			$name2 = Userprofiles::model()->findByPk($Id1['user2_id']);
			$link1 = CHtml::link(CHtml::encode($name1->display_name), array('/userprofiles/view', 'id'=>$name1->user_id));
			$link2 = CHtml::link(CHtml::encode('Ban'), array('/userprofiles/view', 'id'=>$name2->user_id));			
            echo $link1." là ".CHtml::encode($Id1->getTypeFriendText())." với ".$link2."<br/>";
            echo '</div>';
        }
   }
?>
