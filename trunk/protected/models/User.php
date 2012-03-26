<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $block
 * @property integer $activation
 * @property string $last_login_IP
 * @property string $last_login_time
 * @property string $create_time
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property CommentMe[] $commentMes
 * @property Event[] $events
 * @property Friend[] $friends
 * @property Friend[] $friends1
 * @property Like[] $likes
 * @property LikeStatu[] $likeStatus
 * @property Me[] $mes
 * @property Userprofiles $userprofiles
 */
class User extends CActiveRecord
{
        public $password_repeat;
        public $verifyCode;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		        array('username, email','unique'),
		        array('password_repeat','safe'),
		        array('verifyCode', 'safe'),
		        array('password','compare'),
			array('username, password, email, password_repeat', 'required', 'on'=>'register'),
			array('block, activation', 'numerical', 'integerOnly'=>true),
			array('username, password, email, last_login_IP', 'length', 'max'=>255),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, block, activation, last_login_IP, last_login_time, create_time', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comment', 'user_id'),
			'commentMes' => array(self::HAS_MANY, 'CommentMe', 'create_user_id'),
			'events' => array(self::HAS_MANY, 'Event', 'create_user_id'),
			'friends' => array(self::HAS_MANY, 'Friend', 'user2_id'),
			'friends1' => array(self::HAS_MANY, 'Friend', 'user1_id'),
			'likes' => array(self::HAS_MANY, 'Like', 'user_id'),
			'likeStatus' => array(self::HAS_MANY, 'LikeStatu', 'user_id'),
			'mes' => array(self::HAS_MANY, 'Me', 'user_id'),
			'userprofiles' => array(self::HAS_ONE, 'Userprofiles', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'verifyCode'=>'Verification Code',
			'email' => 'Email',
			'block' => 'Block',
			'activation' => 'Activation',
			'last_login_IP' => 'Last Login Ip',
			'last_login_time' => 'Last Login Time',
			'create_time' => 'Create Time',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('block',$this->block);
		$criteria->compare('activation',$this->activation);
		$criteria->compare('last_login_IP',$this->last_login_IP,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function afterValidate ()
	{
	        parent::afterValidate();
	        $this->password = $this->MD5P($this->password);
	}
	
	public function MD5P ($value)
	{
	        return MD5($value);
	}
}
