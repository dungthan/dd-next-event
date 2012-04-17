<?php
class AddFriend extends CWidget{
    
    public function AddFriend(){
        $criteria = new CDbCriteria;
	//	$criteria->order = "create_time DESC";
	//	$criteria->limit = 3;
		$model = User::model()->findAll($criteria);
      $this->render('AddFriend',array('model'=>$model));  
    }
}



?>