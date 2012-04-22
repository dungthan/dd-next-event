<?php
class Friendlist extends CWidget{
    public function init (){
        
    }
    
    public function Friendlist()
     {
        if(isset($_GET['id'])){$UserId2=$_GET['id']; }else{ $UserId2 = Yii::app()->user->id ; }
        
        $CountRequest = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE  user2_id = '".$UserId2."'  AND request = 0")->queryScalar();
        $CountRequest1 = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE  user1_id = '".$UserId2."'  AND request = 1")->queryScalar();
        $CountRequest2 = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE  user2_id = '".$UserId2."'  AND request = 1")->queryScalar();
		$this->render('Friend',array(
		//	'model'=>$model,
            'CountRequest'=>$CountRequest,
            'CountRequest1'=>$CountRequest1,
            'CountRequest2'=>$CountRequest2,
            'id'=>$UserId2,
		));
     }
}

?>