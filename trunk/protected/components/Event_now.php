<?php 
class Event_now extends CWidget {
	public function init()
	{}
	
	public function Event_now()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "start_time >= NOW() AND censor = 1";
		$criteria->order = "	start_time ASC";
		$criteria->limit = 15;
		$model = Event::model()->findAll($criteria);
		$this->render ('Event_now', array ('model'=>$model));
	}
}
?>