<?php
class SearchFriend extends CWidget
{
	public function init ()
	{
	
	}
	
	public function SearchFriend ()
	{
		$model = new User;
        $Users = User::model()->findAll();
		$ListUser=array();
		foreach($Users as $User)
		{
			$ListUser[]=$User->username;
		}
		$this->render('SearchFriend', array('model'=>$model,'ListUser'=>$ListUser));
	}
}


?>