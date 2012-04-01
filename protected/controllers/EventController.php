<?php

class EventController extends Controller
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
				'actions'=>array('hotevent','topevent','index','view','newevent'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','thumbnail','totalpost'),
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
	    $this->like($id);
        $model=$this->loadModel($id);
        $this->view($model);
                
		$this->performAjaxValidation($model);
		$str_like = $this->stringLike($model->id);
		$like = new Like;
                if (isset($_POST['Like']))
                {       
                        $model->view = $model->view - 2;
                         Event::model()->updateByPK($model->id, array('view'=>$model->view));
                       if ($model->checkLike($model->id, Yii::app()->user->id) === false)
                       {
                                $like->event_id = $model->id;
                                $like->attributes=$_POST['Like'];
                                if ($this->addLike($like))
                                $this->redirect(array('view','id'=>$model->id));
                       }else
                       {
                                $like->event_id = $model->id;
                                $like->attributes=$_POST['Like'];
                                $_like = Like::model()->findByAttributes(array('event_id'=>$like->event_id, 'user_id'=>$like->user_id));
                                if ($_like->delete())
                                        $this->redirect(array('view', 'id'=>$model->id));
                       }
                        
                }
        // $model->setScenario('_censor');
                
		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			if($model->save()){
                Yii::app()->user->setFlash('success',"<b>Đã thành công.<b/>");
				$this->redirect(array('view','id'=>$model->id));
            }else{
                Yii::app()->user->setFlash('error',"<b>Có lỗi xảy ra <b/>");
            }
		}
		$this->render('view',array(
			'model'=>$model,
			'like'=>$like,
			'str_like'=>$str_like,
            //'censor'=>$censor,
		));
	}
        
        public function addLike ($like)
        {
                return $like->save();
        }
        
        public function view ($event)
        {
                $event->view = $event->view + 1;
                Event::model()->updateByPK($event->id, array('view'=>$event->view));
        }
        
        public function like ($id)
        {
                $criteria = array (
                        'condition'=>'event_id='.$id,
                );
                $count = Like::model()->count($criteria);
                Event::model()->updateByPK($id, array('e_like'=>$count));
        }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Event;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
            $DateStart = date('d',strtotime($model->start_time)) ;
    			if($model->save()){
    		      	  Yii::app()->user->setFlash('success',"<b>Sự kiện đăng thành công.<b/>");
                      $this->redirect(array('thumbnail','id'=>$model->id));    
                } 
            else{
                Yii::app()->user->setFlash('error',"<b>Có lỗi xảy ra <b/>");         
            }
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
		 $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
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
		$dataProvider=new CActiveDataProvider('Event',array(
            'criteria'=>array(
                'condition'=>"censor = 0",
                'order'=>'create_time DESC',
            ),
        ));
        $dataProviderCensor = new CActiveDataProvider('Event',array(
            'criteria'=>array(
                'condition'=>"censor= 1",
                'order'=>'create_time DESC',
            ),
        ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
            'dataProviderCensor'=>$dataProviderCensor,
		));
	}
    /**
     * list event had ever posted by user  
     */
	public function actionTotalPost()
    {
        $NameUser = Yii::app()->user->name;
        $IdUser = Yii::app()->db->createCommand("SELECT id FROM tbl_user WHERE username ='".$NameUser."'")->queryScalar();
         
        $dataProvider=new CActiveDataProvider('Event', array(
            'criteria'=>array(
                'condition'=>'create_user_id=:Iduser and censor=0',
                'params'=>array(':Iduser'=>$IdUser),
                'order'=>'create_time DESC'
                ),
             'pagination'=> array('pageSize'=>5,),  
                ));
        $dataProviderCensor=new CActiveDataProvider('Event', array(
            'criteria'=>array(
                'condition'=>'create_user_id=:Iduser  and censor=1',
                'params'=>array(':Iduser'=>$IdUser),
                'order'=>'create_time DESC'
                ),
             'pagination'=> array('pageSize'=>5,),  
                ));
        $this->render('totalPost',array(
           'dataProvider'=>$dataProvider,
           'dataProviderCensor'=>$dataProviderCensor,
        ));
    }
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Event('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Event']))
			$model->attributes=$_GET['Event'];

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
		$model=Event::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='event-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    /**
     * 
     * 
     * */
     
     public function actionThumbnail($id)
        {           
            $model = $this->loadModel($id);
            $model->setScenario('thumbnail');
            if($model->id === $_GET['id'])
                if (isset($_POST['Event']))
                {
                    $model->attributes = $_POST['Event'];
                    $model->thumbnail = CUploadedFile::getInstance($model,'thumbnail');
                    if ($model->save())
                    {
                        $name = $model->thumbnail;
                        $path = YiiBase::getPathOfAlias('webroot').'/images/thumbnail/';
                        $model->thumbnail->saveAs($path.$name);
                        Yii::app()->user->setFlash('success',"<b>Đã thành công.<b/>");
                        $this->redirect(array('view','id'=>$model->id)); 
                    }else
                        Yii::app()->user->setFlash('error',"<b>Không thành công.<b/>");
                }
            $this->render('thumbnail',array('model'=>$model));
        }
    
    public function stringLike ($id)
    {   
        if (Yii::app()->user->id !== NULL){
        $criteria = array(
                'condition'=>'event_id='.$id.' AND user_id !='.Yii::app()->user->id,
                'order'=>'create_time DESC',
                'limit'=>5,
        );
        $_string = Like::model()->findAll($criteria);
        return $_string;
        }else
        {
                $criteria = array(
                'condition'=>'event_id='.$id,
                'order'=>'create_time DESC',
                'limit'=>5,
        );
        $_string = Like::model()->findAll($criteria);
        return $_string;
        }
    }
    
    public function actionNewevent ()
    {
        $dataProvider = new CActiveDataProvider ('Event', array(
                'criteria'=>array(
                        'condition'=>'',
                        'order'=>'create_time DESC',
                        'limit'=>10,
                ),
                'pagination'=>array(
                        'pagesize'=>10,
                ),
        ));
        $this->render('index', array('dataProvider'=>$dataProvider));
    }
    public function actionTopevent ()
    {
        $dataProvider = new CActiveDataProvider ('Event', array(
                'criteria'=>array(
                        'condition'=>'',
                        'order'=>'e_like DESC',
                        'limit'=>10,
                ),
                'pagination'=>array(
                        'pagesize'=>10,
                ),
        ));
        $this->render('index', array('dataProvider'=>$dataProvider));
    }
    public function actionHotevent ()
    {
        $dataProvider = new CActiveDataProvider ('Event', array(
                'criteria'=>array(
                        'condition'=>'',
                        'order'=>'view DESC',
                        'limit'=>10,
                ),
                'pagination'=>array(
                        'pagesize'=>10,
                ),
        ));
        $this->render('index', array('dataProvider'=>$dataProvider));
    }
}
