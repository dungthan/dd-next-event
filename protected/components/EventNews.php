<?php 
class EventNews extends CWidget {
	public function init ()
	{}
	
	public function EventNews ()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "censor = 1";
		$criteria->order = "create_time DESC";
		$criteria->limit = 4;
		$model = Event::model()->findAll($criteria);
		$this->render('EventNews', array('model'=>$model));
	}
}
?>