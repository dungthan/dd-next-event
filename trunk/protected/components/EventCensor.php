<?php 
class EventCensor extends CWidget {
	public function init ()
	{}
	
	public function EventCensor ()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "censor = 0";
		$criteria->order = "create_time DESC";
		$criteria->limit = 4;
		$model = Event::model()->findAll($criteria);
		$this->render('EventCensor', array('model'=>$model));
	}
}
?>