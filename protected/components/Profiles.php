<?php
class Profiles extends CWidget{
    
    public function Profiles(){
        $id = Yii::app()->user->id;
        $model = $this->loadModel($id);
        $this->render('Profiles',array('model'=>$model));
    }
    
   	public function loadModel($id)
	{
		$model=Userprofiles::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}

?>