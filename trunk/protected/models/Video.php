<?php

/**
 * This is the model class for table "tbl_video".
 *
 * The followings are the available columns in table 'tbl_video':
 * @property integer $id
 * @property integer $typevideo_id
 * @property string $name
 * @property string $link
 * @property string $permission
 * @property string $create_time
 * @property string $update_time
 * @property integer $create_user_id
 * @property integer $view
 *
 * The followings are the available model relations:
 * @property Typevideo $typevideo
 * @property User $createUser
 */
class Video extends CActiveRecord
{
	const TYPE_TOI = "tôi";
	const TYPE_BANBE = "bạn bè";
	const TYPE_MOINGUOI = "mọi người";
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Video the static model class
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
		return 'tbl_video';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('typevideo_id, name, link, permission', 'required'),
			array('typevideo_id, create_user_id, view', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, typevideo_id, name, link, permission, create_time, update_time, create_user_id, view', 'safe', 'on'=>'search'),
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
			'typevideo' => array(self::BELONGS_TO, 'Typevideo', 'typevideo_id'),
			'createUser' => array(self::BELONGS_TO, 'User', 'create_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'typevideo_id' => 'Typevideo',
			'name' => 'Name',
			'link' => 'Link',
			'permission' => 'Permission',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'create_user_id' => 'Create User',
			'view' => 'View',
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
		$criteria->compare('typevideo_id',$this->typevideo_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('permission',$this->permission,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('view',$this->view);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	 public function getTypeVideo()
    {
        $TypeArray = CHtml::listData(Typevideo::model()->findAll(array('order' => 'name')), 'id', 'name');
        return $TypeArray;
    }
	
	public function getTypePermission ()
	{
		return array (
			self::TYPE_TOI=>'Riêng tôi',
			self::TYPE_BANBE=>'Bạn bè',
			self::TYPE_MOINGUOI=>'Mọi người',
		);
	}
	
	protected function beforeValidate()
	{
		if ($this->isNewRecord)
		{
			$this->create_time = $this->update_time = new CDbExpression ('NOW()');
		}else
			$this->update_time = new CDbExpression ('NOW()');
		return parent::beforeValidate();
	}
}