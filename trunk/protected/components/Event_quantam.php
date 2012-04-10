<?php 
class Event_quantam extends CWidget {
	public function init ()
	{}
	
	public function Event_quantam ()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "censor = 1";
		$criteria->order = "view DESC";
		$criteria->limit = 4;
		$model = Event::model()->findAll($criteria);
		$this->render('Event_quantam', array('model'=>$model));
	}
}
?>