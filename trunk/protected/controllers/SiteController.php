<?php

class SiteController extends Controller
{
   // public $layout='//layouts/index';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
 	    $this->layout='index';
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
             
            $ID = Yii::app()->db->createCommand("SELECT id FROM tbl_user WHERE username='".$_POST['LoginForm']['username']."'")->queryScalar();          
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
                $link = Yii::app()->request->hostInfo.'/'.Yii::app()->createUrl(Yii::app()->controller->getId() , $_GET );
                $action = new Action;
                $action->issertAction($ID,$ID,"WellCome","NextEvent",$link);
				$this->redirect(Yii::app()->user->returnUrl);
            }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
	   
        $action = new Action;
        $ID = Yii::app()->user->id;
        $link = Yii::app()->request->hostInfo.'/'.Yii::app()->createUrl(Yii::app()->controller->getId() , $_GET );
        $action->issertAction($ID,$ID,"Logout nextEvent","See You AGain",$link);
		User::model()->updateByPk(Yii::app()->user->id,array('block'=>0));
        Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}