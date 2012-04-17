<?php
class SearchEvent extends CWidget
{
	public function init ()
	{
	
	}
	
	public function SearchEvent ()
	{
		$model = new Event;
        $Events = Event::model()->findAll('censor=1');
		$ListEvent = array();
		foreach($Events as $Event)
		{
			$ListEvent[]=$Event->name;
		}
		$this->render('SearchEvent', array('model'=>$model,'ListEvent'=>$ListEvent));
	}
}


?>