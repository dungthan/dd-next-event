<?php

class FriendController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/me';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','friend','searchfriend','addfriend'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','friend','delete','search','addfriend'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
	   
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Friend;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Friend']))
		{
			$model->attributes=$_POST['Friend'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Friend']))
		{
			$model->attributes=$_POST['Friend'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$Uid = Yii::app()->user->id;
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();
			$this->redirect(array('friend','id'=>$Uid));
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			//if(!isset($_GET['ajax']))
			//	$this->redirect(array('friend','id'=>$model->id));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Friend');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Friend('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Friend']))
			$model->attributes=$_GET['Friend'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
    /**
     * 
     * 
     * */
     public function actionFriend($id)
     {
        $this->layout='//layouts/me';
        $model=$this->loadModelUser($id);
        $id = Yii::app()->user->id; 
        $UserId2 = Yii::app()->user->id ;
        $CountRequest = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE  user2_id = '".$UserId2."'  AND request = 0")->queryScalar();
        $CountRequest1 = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE  user1_id = '".$UserId2."'  AND request = 1")->queryScalar();
        $CountRequest2 = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE  user2_id = '".$UserId2."'  AND request = 1")->queryScalar();
		$this->render('friend',array(
			'model'=>$model,
            'CountRequest'=>$CountRequest,
            'CountRequest1'=>$CountRequest1,
            'CountRequest2'=>$CountRequest2,
            'id'=>$id,
		));
     }
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Friend::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
    public function loadModelUser($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='friend-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    
    public function actionSearchFriend()
	{    
		$model = new User('search');
		$model->unsetattributes();
		if (isset($_GET['User']))
		{
			$model->attributes=$_GET['User'];
			$this->render('searchfriend', array('model'=>$model));
		}
	}
    
    public function actionAddfriend(){
        echo "hi";
    }
    

}
