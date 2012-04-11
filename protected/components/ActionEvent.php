<?php 
class ActionEvent extends CWidget {
	public function init ()
	{}
	
	public function ActionEvent ()
	{
		$criteria = new CDbCriteria;
		//$criteria->condition = "censor = 0";
		$criteria->order = "id DESC";
		$criteria->limit = 6;
		$model = Action::model()->findAll($criteria);
		$this->render('ActionEvent', array('model'=>$model));
	}
}
?>