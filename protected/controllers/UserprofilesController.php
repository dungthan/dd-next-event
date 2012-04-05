<?php

class UserprofilesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array(),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(,'update','avatar','displayprofile'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('view','admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('@'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
	        //$id = Yii::app()->user->id ;
		$this->render('view',array(
			'model'=>$this->loadModel($id),
        ));
	}

	/**
	 * Displays User Profile 
	 * 
	 */
	public function actionDisplayprofile()
	{
	        $id = Yii::app()->user->id ;
		$this->render('displayprofile',array(
			'model'=>$this->loadModel($id),
        ));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
/*	public function actionCreate()
	{
               // if (Yii::app()->user->id === $_GET['id']){
		        $model=new Userprofiles;

		        // Uncomment the following line if AJAX validation is needed
		        // $this->performAjaxValidation($model);

		        if(isset($_POST['Userprofiles']))
		        {
			        $model->attributes=$_POST['Userprofiles'];
			        if($model->save())
				        $this->redirect(array('avatar','id'=>$model->user_id));
		        }
		        $this->render('create',array(
			        'model'=>$model,
		        ));
	//	}else echo "bạn không có đủ khả năng để thay đổi";
	} */
        
        public function actionAvatar()
        {
                $id = Yii::app()->user->id;
                $model = $this->loadModel($id);
                $model->setScenario('avatar');
                if (isset($_POST['Userprofiles']))
                 {
                    $model->attributes = $_POST['Userprofiles'];
                    $model->avatar = CUploadedFile::getInstance($model,'avatar');
                    if ($model->save())
                    {
                      echo "da save" ;
                      $name = $model->avatar;
                      $path = YiiBase::getPathOfAlias('webroot').'/avatar/';
                      $model->avatar->saveAs($path.$name);
                      $this->redirect(Yii::app()->homeUrl);
                     }
                  }
                $this->render('avatar',array('model'=>$model));
               
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

		if(isset($_POST['Userprofiles']))
		{
			$model->attributes=$_POST['Userprofiles'];
			if($model->save())
				 $this->redirect(array('avatar'));
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Userprofiles');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Userprofiles('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Userprofiles']))
			$model->attributes=$_GET['Userprofiles'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Userprofiles::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='userprofiles-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
