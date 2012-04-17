<?php 
class Top_Event extends CWidget {
	public function init()
	{}
	
	public function Top_Event ()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "censor = 1 AND start_time >= NOW()";
		$criteria->order = "e_like DESC";
		$criteria->limit = 3;
		$model = Event::model()->findAll($criteria);
		$this->render ('Top_Event', array ('model'=>$model));
	}
}
?>