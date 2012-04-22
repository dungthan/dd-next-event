<?php
class AddFriend extends CWidget{
    
    public function AddFriend(){
        $id=Yii::app()->user->id;
        $criteria = new CDbCriteria;
		$criteria->order = "RAND()";
        $criteria->condition="id!=:Id AND id!=:Id2 AND id!=:Id3";
        $criteria->params= array(":Id"=>$id,":Id2"=>$this->checkId1($id) ,":Id3"=>$this->checkId2($id));
		$model = User::model()->findAll($criteria);
        
        $modelId = $this->loadModel($id);
        $Friends = new Friend ;
        $CountRequest = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE user1_id = '".$id."' AND user2_id = '".$modelId->id."'")->queryScalar();
        $CountRequest1 = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE user2_id = '".$id."' AND user1_id = '".$modelId->id."'")->queryScalar();
        if(isset($_POST['Friend']))
		{
    			$Friends->attributes=$_POST['Friend'];
    			if($Friends->save())
                {
    			 Yii::app()->user->setFlash('success',"<b>Đã gủi yêu cầu kết bạn.<b/>");
    			}else{
    			 Yii::app()->user->setFlash('error',"<b>yêu cầu thất bại.<b/>");
                 $this->redirect(array('view','id'=>$model->id));
    			}
            }
		}
      $this->render('AddFriend',array(
                'model'=>$model,
                'modelId'=>$modelId,
                'CountRequest'=>$CountRequest,
                'CountRequest1'=>$CountRequest1,
                'Friends'=>$Friends));  
    }
    
    public function checkId1($Id1){
        $Ids = Friend::model()->findAllByAttributes(array('user1_id'=>$Id1,'request'=>'1'));
        foreach ($Ids as $Id):
            return $Id['user2_id'];
        endforeach;
    }
    
    public function checkId2($Id1){
        $Ids = Friend::model()->findAllByAttributes(array('user2_id'=>$Id1,'request'=>'1'));
        foreach ($Ids as $Id):
            return $Id['user1_id'];
        endforeach;
    }
    
   	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}



?>