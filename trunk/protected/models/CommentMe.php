<?php

/**
 * This is the model class for table "tbl_comment_me".
 *
 * The followings are the available columns in table 'tbl_comment_me':
 * @property integer $id
 * @property integer $create_user_id
 * @property string $content
 * @property integer $statu_id
 * @property string $create_time
 *
 * The followings are the available model relations:
 * @property User $createUser
 */
class CommentMe extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CommentMe the static model class
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
		return 'tbl_comment_me';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('content', 'required'),
			array('create_user_id, statu_id', 'numerical', 'integerOnly'=>true),
			array('content', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, create_user_id, content, statu_id, create_time', 'safe', 'on'=>'search'),
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
			'create_user_id' => 'Người viết',
			'content' => 'Nội dung',
			'statu_id' => 'Trạng thái',
			'create_time' => 'Thời gian tạo',
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
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('statu_id',$this->statu_id);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
