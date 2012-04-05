<?php

/**
 * This is the model class for table "tbl_security".
 *
 * The followings are the available columns in table 'tbl_security':
 * @property integer $id
 * @property integer $user_id
 * @property integer $userprofile_id
 * @property integer $userprofile
 * @property integer $myvideo_id
 * @property integer $myvideo
 * @property integer $friend_id
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Security extends CActiveRecord
{
    const SR_SHIP0 = 0;
    const SR_SHIP1 = 1;
    const SR_SHIP2 = 2;
    const SR_SHIP3 = 3;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Security the static model class
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
		return 'tbl_security';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userprofile,friend', 'required'),
			array('userprofile , myvideo, friend', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array(' user_id, userprofile, myvideo', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'userprofile' => 'Userprofile',
			'myvideo' => 'Myvideo',
			
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('userprofile',$this->userprofile);
		$criteria->compare('myvideo',$this->myvideo);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
        protected function beforeValidate()
    {   		
		if($this->isNewRecord)
		{
            $this->user_id=Yii::app()->user->id;
        }		
		return parent::beforeValidate();
	}
    public function setSecurity(){
         return array(
            self::SR_SHIP0=>'Công Khai',
            self::SR_SHIP1=>'Bạn Bè',
            self::SR_SHIP2=>'Bạn Thân',
            self::SR_SHIP3=>'Gia Đình',       
        );
    }
    
    public function getTypeUserprofile()
    {
        $Security = $this->setSecurity();
        return isset($Security[$this->userprofile]) ? $Security[$this->userprofile] : "Công Khai ({$this->userprofile})";
    }
    
     public function getTypeFriend()
    {
        $Security = $this->setSecurity();
        return isset($Security[$this->friend]) ? $Security[$this->friend] : "Công Khai ({$this->friend})";
    }
    
     public function getTypeVideo()
    {
        $Security = $this->setSecurity();
        return isset($Security[$this->myvideo]) ? $Security[$this->myvideo] : "Công Khai ({$this->myvideo})";
    }
    


}