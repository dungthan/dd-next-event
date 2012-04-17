<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
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
	public $layout='//layouts/detail';

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
				'actions'=>array('captcha','register','index','view','search'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','search','changepass'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','search'),
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
	    $model = $this->loadModel($id) ;
	    $Friends = new Friend ;
        $UserId = Yii::app()->user->id ;
        $modelUser = $this->loadModel($UserId);      
        $CountRequest = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE user1_id = '".$UserId."' AND user2_id = '".$model->id."'")->queryScalar();
        $CountRequest1 = Yii::app()->db->createCommand("SELECT COUNT(*) FROM tbl_friend WHERE user2_id = '".$UserId."' AND user1_id = '".$model->id."'")->queryScalar();
        $StatusRequest = Yii::app()->db->createCommand("SELECT request FROM tbl_friend WHERE user1_id = '".$UserId."' AND user2_id = '".$model->id."'")->queryScalar();
        $StatusFriend = Yii::app()->db->createCommand("SELECT friendship FROM tbl_friend WHERE (user1_id = '".$UserId."' AND user2_id = '".$model->id."') OR (user2_id = '".$UserId."' AND user1_id = '".$model->id."')")->queryScalar();
        // set data
        $Friends->user1_id =  Yii::app()->user->id ;
        $Friends->user2_id =  $model->id ;
        
        if(isset($_POST['Friend']))
		{
            if($CountRequest!= 0){ // check when user reload page not create new rational 
               Yii::app()->user->setFlash('success',"<b>Mạng cùi quá :)).<b/>");
            }else{
    			$Friends->attributes=$_POST['Friend'];
    			if($Friends->save())
                {
    			 Yii::app()->user->setFlash('success',"<b>Đã gủi yêu cầu kết bạn.<b/>");
    			}else{
    			 Yii::app()->user->setFlash('error',"<b>yêu cầu thất bại.<b/>");
                 $this->redirect(array('view','id'=>$model->id));
    			}
            }
		}
        
		$this->render('view',array(
			'model'=>$model,
            'modelUser'=>$modelUser,
            'Friends'=>$Friends,
            'CountRequest'=>$CountRequest,
            'CountRequest1'=>$CountRequest1,
            'StatusRequest'=>$StatusRequest,
            'StatusFriend'=>$StatusFriend,
		));
	}   

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionRegister()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
        $model->setScenario('register');
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$temp = $model->password;
			if($model->save())
			{
                    $User = new User;
                    $action= new Action;
                    $link = Yii::app()->request->hostInfo.'/'.Yii::app()->createUrl(Yii::app()->controller->getId() , $_GET );
                    $action->issertAction($model->id,$model->id,'Wellcome newBie','NextEvent',$link);
                    $User->insertSecurity($model->id,$model->id,0,0,0); // insert tbl_seccurity
                    $User->insertUserProfile($model->id,$model->username,new CDbExpression('NOW()'));
			        $identity = new UserIdentity($model->username, $temp);
			        $identity->authenticate();
			        if ($identity->errorCode == UserIdentity::ERROR_NONE)
			        {
                        $duration = 3600*24*30;
		                Yii::app()->user->login($identity, $duration);
                        User::model()->updateByPk($model->id,array('block'=>1));
		                $this->redirect(array('userprofiles/update', 'id'=>$model->id));
			        }
			}
		}

		$this->render('register',array(
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

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
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
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

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
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	    /**
     * Change password
     * 
     * */

 public function actionChangePass() 
        {                  
                $id = Yii::app()->user->id ;
                $model = $this->loadModel($id);
                $model->unsetAttributes() ;
                $this->performAjaxValidation($model);
                $new_password = User::model()->findByPk(Yii::app()->user->id);
                $old_password = $new_password->MD5P($model->oldPassword);
                                
                if(isset($_POST['User']))
            		{
            			$model->attributes=$_POST['User'];
                        $new_password = User::model()->findByPk(Yii::app()->user->id);
                        $old_password = $new_password->MD5P($model->oldPassword);
                        if($new_password->password != $old_password)
                        {
                            $model->addError('oldPassword', "<b>You've enterd wrong old password.<b/>");
                            $model->unsetAttributes();
                        }else{
                			if($model->save())
                            {
                			    Yii::app()->user->setFlash('success',"<b>Password đã lưu thành công.<b/>");
                				$this->redirect(array('view','id'=>$model->id));
                            }else
                            { 
                                Yii::app()->user->setFlash('fail',"<b>Password nhập vào không dúng. Vui lòng thử lại .<b/>");
                            }
                        }
            		}
              
            $this->render('changepass',array('model'=>$model));

        }
}
