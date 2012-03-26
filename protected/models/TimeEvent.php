<?php
abstract class TimeEvent extends CActiveRecord
{
	protected function beforeValidate()
    {   		
		if($this->isNewRecord)
		{
            $this->create_time=$this->update_time=new CDbExpression('NOW()');
            $this->create_user_id=Yii::app()->user->id;
        }
		else
		{   
	       	$this->update_time=new CDbExpression('NOW()');
			$this->create_user_id=Yii::app()->user->id;
		}		
		return parent::beforeValidate();
	}
	
}

