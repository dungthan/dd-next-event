<?php

/**
 * This is the model class for table "tbl_friend".
 *
 * The followings are the available columns in table 'tbl_friend':
 * @property integer $id
 * @property integer $user1_id
 * @property integer $user2_id
 * @property integer $req_user1
 * @property integer $req_user2
 *
 * The followings are the available model relations:
 * @property User $user2
 * @property User $user1
 */
class Friend extends TimeFriend
{
    const FR_SHIP0 = 0;
    const FR_SHIP1 = 1;
    const FR_SHIP2 = 2;
    const FR_SHIP3 = 3;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Friend the static model class
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
		return 'tbl_friend';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user1_id, user2_id', 'required'),
			array('user1_id, user2_id, request,friendship', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user1_id, user2_id', 'safe', 'on'=>'search'),
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
			'user2' => array(self::BELONGS_TO, 'User', 'user2_id'),
			'user1' => array(self::BELONGS_TO, 'User', 'user1_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user1_id' => 'User1',
			'user2_id' => 'User2',
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
		$criteria->compare('user1_id',$this->user1_id);
		$criteria->compare('user2_id',$this->user2_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    public function FriendShip(){
         return array(
            self::FR_SHIP0=>'Chờ Trả Lời',
            self::FR_SHIP1=>'Bạn Bè',
            self::FR_SHIP2=>'Bạn Thân',
            self::FR_SHIP3=>'Gia Đình',       
        );
    }
    
        public function getTypeFriendText()
    {
        $FriendShip = $this->FriendShip();
        return isset($FriendShip[$this->friendship]) ? $FriendShip[$this->friendship] : "Chưa xác nhận ({$this->friendship})";
    }
}