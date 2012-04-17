<?php

/**
 * This is the model class for table "tbl_me".
 *
 * The followings are the available columns in table 'tbl_me':
 * @property integer $statu_id
 * @property integer $user_id
 * @property string $content
 * @property string $create_time
 * @property string $permission
 *
 * The followings are the available model relations:
 * @property CommentMe[] $commentMes
 * @property LikeStatu[] $likeStatus
 * @property User $user
 */
class Me extends CActiveRecord
{
        const TYPE_TOI = "tôi";
        const TYPE_BANBE = "bạn bè";
        const TYPE_MOINGUOI = "mọi người";
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Me the static model class
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
		return 'tbl_me';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, permission', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('content', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('statu_id, user_id, content, create_time, permission', 'safe', 'on'=>'search'),
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
			'commentMes' => array(self::HAS_MANY, 'CommentMe', 'statu_id'),
			'likeStatus' => array(self::HAS_MANY, 'LikeStatu', 'statu_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'statu_id' => 'Trạng thái',
			'user_id' => 'Người tạo',
			'content' => 'Nội dung',
			'create_time' => 'Thời gian tạo',
			'permission' => 'Cho phép',
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

		$criteria->compare('statu_id',$this->statu_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('permission',$this->permission,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getPermission ()
	{
	        return array (
                    self::TYPE_MOINGUOI => "Mọi Người",
                    self::TYPE_BANBE => "Bạn Bè",
	                self::TYPE_TOI => "Riêng Tôi",
	                
	                
	        );
	}
	
	protected function beforeValidate ()
	{
	        if ($this->isNewRecord)
	        {
	                $this->create_time = new CDbExpression ('NOW()');
	        }
	        return parent::beforeValidate();
	}

}
