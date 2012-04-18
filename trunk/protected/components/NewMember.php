<?php 
class NewMember extends CWidget {
	public function init ()
	{}
	
	public function NewMember ()
	{
		$criteria = new CDbCriteria;
		$criteria->order = "create_time DESC";
		$criteria->limit = 12;
		$model = User::model()->findAll($criteria);
		$this->render('NewMember', array('model'=>$model));
	}
}
?>