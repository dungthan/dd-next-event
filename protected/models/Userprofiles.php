<?php

/**
 * This is the model class for table "tbl_userprofiles".
 *
 * The followings are the available columns in table 'tbl_userprofiles':
 * @property integer $user_id
 * @property string $display_name
 * @property string $first_name
 * @property string $last_name
 * @property string $company
 * @property string $lang
 * @property string $bio
 * @property string $bod
 * @property string $gender
 * @property string $phone
 * @property string $mobile
 * @property string $address_line1
 * @property string $address_line2
 * @property string $address_line3
 * @property string $yim_handle
 * @property string $skype_handle
 * @property string $avatar
 * @property string $facebooksite
 * @property integer $update_on
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Userprofiles extends CActiveRecord
{
    const TYPE_MALE = 'nam';
	const TYPE_FEMALE = 'nữ';
	const TYPE_KHAC = 'khác';
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Userprofiles the static model class
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
		return 'tbl_userprofiles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('display_name, first_name, last_name, company, bio, bod, gender, phone, address_line1 yim_handle,', 'required'),
			array('display_name, avatar, first_name, last_name, company, lang, address_line1, address_line2, address_line3, yim_handle, skype_handle, avatar, facebooksite', 'length', 'max'=>255),
			array('phone, mobile', 'length', 'max'=>20),
            array('avatar','required','on'=>'avatar'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('avatar','file','types'=>'jpg,png,gif','allowEmpty'=>true),
			array('user_id, display_name, first_name, last_name, company, lang, bio, bod, gender, phone, mobile, address_line1, address_line2, address_line3, yim_handle, skype_handle, avatar, facebooksite, update_on', 'safe', 'on'=>'search'),
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
			'display_name' => 'Tên hiện thị',
			'first_name' => 'Họ',
			'last_name' => 'Tên',
			'company' => 'Nơi làm việc',
			'lang' => 'Ngôn ngữ',
			'bio' => 'Giới thiệu',
			'bod' => 'Ngày sinh',
			'gender' => 'Giới tính',
			'phone' => 'Điện thoại',
			'mobile' => 'Di động',
			'address_line1' => 'Sống tại',
			'address_line2' => 'Đến từ',
			'address_line3' => 'Bổ sung',
			'yim_handle' => 'Tên yahoo',
			'skype_handle' => 'Tên Skype',
			'avatar' => 'Avatar',
			'facebooksite' => 'Facebooksite',
			'update_on' => 'Update On',
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
		$criteria->compare('display_name',$this->display_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('bod',$this->bod,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address_line1',$this->address_line1,true);
		$criteria->compare('address_line2',$this->address_line2,true);
		$criteria->compare('address_line3',$this->address_line3,true);
		$criteria->compare('yim_handle',$this->yim_handle,true);
		$criteria->compare('skype_handle',$this->skype_handle,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('facebooksite',$this->facebooksite,true);
		$criteria->compare('update_on',$this->update_on);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getTypeGender ()
	{
		return array (
		self::TYPE_MALE=>'Nam', 
		self::TYPE_FEMALE=>'Nữ',
		self::TYPE_KHAC=>'Khác',
		);
	}
}
