<?php

class MeController extends Controller
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
				'actions'=>array('create','update','me'),
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
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Me']))
		{
			$model->attributes=$_POST['Me'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->statu_id));
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
	/*public function actionIndex()
	{       
	        $this->Create();
	        
		$dataProvider=new CActiveDataProvider('Me');
		$this->renderPartial('index',array(
			'dataProvider'=>$dataProvider,
		));
	}*/
        // action Me hiện lên tường của user có id là $id 
        public function actionMe ($id)
        {
                if (Yii::app()->user->id === $id)  // kiểm tra xem  id của người đang xem có đúng là $id  
                {                                       // nếu đúng thì hiện form create me 
                        $this->per_riengtoi($id);
                }else // không hiện ra form create me 
                {
                        $this->per_banbe($id);
                }
        }
        
        public function per_riengtoi ($id)
        {
                        $model_create = new Me;
                        
                        if (isset($_POST['Me']))
                        {       
                                $model_create->attributes = $_POST['Me'];
                                if ($model_create->save()){
                                    $action = new Action ;
                                    $url = 'http://'.Yii::app()->request->getServerName();
                                    $url .= CController::createUrl('me/me', array('id'=>$model_create->user_id));
                                    $action->issertAction(Yii::app()->user->id,Yii::app()->user->id,'đã viết lên tường',$_POST['Me']['content'],$url);
                      
                                        $this->redirect(array('me','id'=>Yii::app()->user->id));
                                }
                        }
                        $dataProvider = new CActiveDataProvider ('Me', array(
                                'criteria'=>array(
                                        'condition'=>'user_id='.$id,
                                        'order'=>'create_time desc',
                                ),
                                'pagination'=>array(
                                        'pageSize'=>10,
                                ),
                        ));
                        $this->render('me',array(
                                'model'=>array(
                                        'model_create'=>$model_create, 
                                        'dataProvider'=>$dataProvider
                        )));
        }
        
        public function per_banbe ($id)
        {
                $user_ID = Yii::app()->user->id;
                $user_1 = Friend::model()->findByAttributes (array(
                        'user1_id'=>$user_ID, 
                        'user2_id'=>$id, 
                        'friendship'=>1
                ));
                $user_2 = Friend::model()->findByAttributes (array(
                        'user1_id'=>$id, 
                        'user2_id'=>$user_ID, 
                        'friendship'=>1
                ));
                if ($user_1 !== NULL || $user_2 !== NULL)
                {
                        $dataProvider = new CActiveDataProvider ('Me', array(
                                'criteria'=>array(
                                        'condition'=>'user_id='.$id.' AND permission != "tôi"',
                                        'order'=>'create_time ASC',
                                ),
                                'pagination'=>array(
                                        'pageSize'=>10,
                                ),
                        ));
                        $this->render('me',array('model'=>array('model_create'=>null,'dataProvider'=>$dataProvider)));
                }else 
                {
                        $this->per_moinguoi($id);
                }
        }
        
        public function per_moinguoi ($id)
        {
                $dataProvider = new CActiveDataProvider ('Me', array(
                        'criteria'=>array(
                                'condition'=>'user_id='.$id.' AND permission = "mọi người"',
                                'order'=>'create_time ASC',
                        ),
                        'pagination'=>array(
                                'pageSize'=>10,
                        ),
                ));
                $this->render('me',array('model'=>array('model_create'=>null,'dataProvider'=>$dataProvider)));
        }
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Me('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Me']))
			$model->attributes=$_GET['Me'];

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
		$model=Me::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='me-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
