<?php
class SlideLage extends CWidget{
    
    public function SlideLage(){
        
        $criteria = new CDbCriteria;
		$criteria->condition = "censor = 1 AND start_time >= NOW()";
		$criteria->order = "e_like DESC";
		$criteria->limit = 3;
		$model = Event::model()->findAll($criteria);
		$this->render ('SlideLage', array ('model'=>$model));
    }
}

?>