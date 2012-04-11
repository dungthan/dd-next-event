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
				'actions'=>array('update','avatar','displayprofile'),
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
	public function actionDisplayprofile($id)
	{
	   if( Yii::app()->user->id == $id ){
		  //$this->render('displayprofile',array('model'=>$this->loadModel($id),));
         $this->Security_Me($id);
      }else {
          $this->Security_EveryOne($id);
      }
	}
    
    public function Security_Me($id){
        
        $this->render('displayprofile',array('model'=>$this->loadModel($id),));      
    }
    
    public function Security_EveryOne($id){
        
        $user_ID = Yii::app()->user->id;
        $user_0_1 = Friend::model()->findByAttributes (array('user1_id'=>$user_ID,'user2_id'=>$id,'friendship'=>0));
        $user_0_2 = Friend::model()->findByAttributes (array('user1_id'=>$id,'user2_id'=>$user_ID,'friendship'=>0));
        if($user_0_1 != NULL || $user_0_2 != NULL){
            $this->render('displayprofile',array('model'=>$this->loadModel($id),));
        }else{
            $this->redirect(array('site/index'));
        }
        
        $user_1_1 = Friend::model()->findByAttributes (array('user1_id'=>$user_ID,'user2_id'=>$id,'friendship'=>1));
        $user_1_2 = Friend::model()->findByAttributes (array('user1_id'=>$id,'user2_id'=>$user_ID,'friendship'=>1));
        if($user_1_1 != NULL || $user_1_2 != NULL){
            $this->render('displayprofile',array('model'=>$this->loadModel($id),));
        }else{
            $this->redirect(array('site/index'));
        }
        
        $user_2_1 = Friend::model()->findByAttributes (array('user1_id'=>$user_ID,'user2_id'=>$id,'friendship'=>2));
        $user_2_2 = Friend::model()->findByAttributes (array('user1_id'=>$id,'user2_id'=>$user_ID,'friendship'=>2));
        if($user_2_1 != NULL || $user_2_2 != NULL){
            $this->render('displayprofile',array('model'=>$this->loadModel($id),));
        }else{
            $this->redirect(array('site/index'));
        }
        
        $user_3_1 = Friend::model()->findByAttributes (array('user1_id'=>$user_ID,'user2_id'=>$id,'friendship'=>3));
        $user_3_2 = Friend::model()->findByAttributes (array('user1_id'=>$id,'user2_id'=>$user_ID,'friendship'=>3));
        if($user_3_1 != NULL || $user_3_2 != NULL){
            $this->render('displayprofile',array('model'=>$this->loadModel($id),));
        }else{
            $this->redirect(array('site/index'));
        }
    
    
    
    }
       
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
                        $action = new Action ;
                        $url = 'http://'.Yii::app()->request->getServerName();
                        $url .= CController::createUrl('me/me', array('id'=>$model->user_id));
                        $action->issertAction(Yii::app()->user->id,Yii::app()->user->id,'đã thay đổi ảnh đại diện',$model->display_name,$url);
          
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
	public function actionUpdate()
	{
	    $id=Yii::app()->user->id;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Userprofiles']))
		{
			$model->attributes=$_POST['Userprofiles'];
			if($model->save()){
                $action = new Action ;
                $url = 'http://'.Yii::app()->request->getServerName();
                $url .= CController::createUrl('me/me', array('id'=>$model->user_id));
                $action->issertAction(Yii::app()->user->id,Yii::app()->user->id,'đã thay đổi thông tin cá nhân',$model->display_name,$url);
            
				 $this->redirect(array('avatar'));
            }
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
