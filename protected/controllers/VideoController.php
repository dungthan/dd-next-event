﻿<?php

class VideoController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','del','video'),
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
	//action show ra video 
	public function actionVideo($id)
	{
	         if (Yii::app()->user->id === $id)  // kiểm tra xem  id của người đang xem có đúng là $id  
                {                                       // nếu đúng thì hiện form create me 
                        $this->per_riengtoi($id);
                }else // không hiện ra form create me 
                {
                        $this->per_banbe($id);
                }
	}
	//ham show ra video mà riêng mình có thể xem dc 
	public function per_riengtoi ($id)
        {
                        $dataProvider = new CActiveDataProvider ('Video', array(
                                'criteria'=>array(
                                        'condition'=>'create_user_id='.$id,
                                        'order'=>'update_time desc',
                                ),
                                'pagination'=>array(
                                        'pageSize'=>10,
                                ),
                        ));
                        $this->render('index',array( 
                                        'dataProvider'=>$dataProvider
                        ));
        }
        // hàm show ra video mà bạn bè mình có thể xem dc 
         public function per_banbe ($id)
        {
				// xét xem user 1 và user 2 có phải bạn bè của nhau không 
                $user_ID = Yii::app()->user->id;
                $user_1 = Friend::model()->findByAttributes (array( 
                        'user1_id'=>$user_ID, 
                        'user2_id'=>$id, 
                        'req_user2'=>"đồng ý"
                ));
                $user_2 = Friend::model()->findByAttributes (array(
                        'user1_id'=>$id, 
                        'user2_id'=>$user_ID, 
                        'req_user2'=>"đồng ý"
                ));
                if ($user_1 !== NULL || $user_2 !== NULL)
                {
                        $dataProvider = new CActiveDataProvider ('Video', array(
                                'criteria'=>array(
                                        'condition'=>'create_user_id='.$id.' AND permission != "tôi"',
                                        'order'=>'update_time ASC',
                                ),
                                'pagination'=>array(
                                        'pageSize'=>10,
                                ),
                        ));
                        $this->render('index',array('dataProvider'=>$dataProvider));
                }else 
                {
                        $this->per_moinguoi($id);
                }
        }
        //hàm show ra những video mà mọi người có thể xem 
        public function per_moinguoi ($id)
        {
                $dataProvider = new CActiveDataProvider ('Video', array(
                        'criteria'=>array(
                                'condition'=>'create_user_id='.$id.' AND permission = "mọi người"',
                                'order'=>'update_time ASC',
                        ),
                        'pagination'=>array(
                                'pageSize'=>10,
                        ),
                ));
                $this->render('index',array('dataProvider'=>$dataProvider));
        }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$this->view($model);
		$this->render('view',array(
			'model'=>$model,
		));
	}
	
	public function view ($video)
	{
		$video->view  = $video->view + 1;
		Video::model()->updateByPK ($video->id, array('view'=>$video->view));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Video;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Video']))
		{
			$model->attributes=$_POST['Video'];
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

		if(isset($_POST['Video']))
		{
			$model->attributes=$_POST['Video'];
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
	
	 public function actionDel($id)
    {
                $model = $this->loadModel($id);
                if ($model->delete())
                {
                        $this->redirect(array('video', 'id'=>Yii::app()->user->id));
                }
    }
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Video');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Video('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Video']))
			$model->attributes=$_GET['Video'];

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
		$model=Video::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='video-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
