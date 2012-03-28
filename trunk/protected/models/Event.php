<?php

/**
 * This is the model class for table "tbl_event".
 *
 * The followings are the available columns in table 'tbl_event':
 * @property integer $id
 * @property integer $typeevent_id
 * @property string $name
 * @property string $content
 * @property string $start_time
 * @property string $end_time
 * @property integer $number_guest
 * @property string $dimention
 * @property string $create_time
 * @property string $update_time
 * @property integer $create_user_id
 * @property integer $view
 * @property integer $censor
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Typeevent $typeevent
 * @property User $createUser
 * @property Like[] $likes
 */
class Event extends TimeEvent
{
    const STYLE_CENSOR1 =0;
    const STYLE_CENSOR2 =1;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('typeevent_id, name, content,place, start_time, end_time, number_guest, dimention', 'required'),
            array('name','unique'),
			array('typeevent_id, number_guest ,censor', 'numerical', 'integerOnly'=>true),
			array('name,thumbnail', 'length', 'max'=>255),
            array('thumbnail','required','on'=>'thumbnail'),
            array('thumbnail','file','types'=>'jpg,png,gif','allowEmpty'=>true),
           // array('start_time','type','type'=>'datetime','datetimeFormat'=>'dd-MM-yyyy hh:mm:ss'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, thumbnail, typeevent_id, name, content, start_time, end_time, number_guest, dimention, create_time, update_time, create_user_id, view, e_like, censor', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'comments' => array(self::HAS_MANY, 'Comment', 'event_id'),
			'typeevent' => array(self::BELONGS_TO, 'Typeevent', 'typeevent_id'),
			'createUser' => array(self::BELONGS_TO, 'User', 'create_user_id'),
			'likes' => array(self::HAS_MANY, 'Like', 'event_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'typeevent_id' => 'Typeevent',
			'name' => 'Name',
			'content' => 'Content',
			'thumbnail' => 'Thumbnail',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'number_guest' => 'Number Guest',
			'dimention' => 'Dimention',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'create_user_id' => 'Create User',
			'view' => 'View',
			'e_like' => 'Like',
			'censor' => 'Censor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('typeevent_id',$this->typeevent_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('number_guest',$this->number_guest);
		$criteria->compare('dimention',$this->dimention,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('view',$this->view);
		$criteria->compare('e_like',$this->e_like);
		$criteria->compare('censor',$this->censor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    
     public function getTypeEventOptions()
    {
        $TypeArray = CHtml::listData(Typeevent::model()->findAll(array('order' => 'name')), 'id', 'name');

        return $TypeArray;
    }
    
    public function CensorOptions()
    {
        return array(
            self::STYLE_CENSOR1=>'Chưa Kiểm Duyệt',
            self::STYLE_CENSOR2=>'Đã Kiểm Duyệt',       
        );
    }
    
    public function getTypeCensorText()
    {
        $CensorOptions = $this->CensorOptions();
        return isset($CensorOptions[$this->censor]) ? $CensorOptions[$this->censor] : "Chưa kiểm duyệt ({$this->censor})";
    }
    
    public function checkLike ($id, $_id)
    {
        $model = Like::model()->findByAttributes (array('event_id'=>$id, 'user_id'=>$_id));
        if ($model !== null)
                return true;
        else
                return false;
    }

}
