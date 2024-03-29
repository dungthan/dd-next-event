<?php

/**
 * This is the model class for table "tbl_action".
 *
 * The followings are the available columns in table 'tbl_action':
 * @property integer $id
 * @property integer $user_id
 * @property integer $action_id
 * @property string $action
 * @property string $link
 * @property string $create_time
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Action extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Action the static model class
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
		return 'tbl_action';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, action_id, action, link, create_time, update_time', 'required'),
			array('user_id, action_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, action_id, action, link, create_time, update_time', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'user_id' => 'User',
			'action_id' => 'Action',
			'action' => 'Action',
			'link' => 'Link',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('action_id',$this->action_id);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    public function issertAction($user_id, $action_id, $action,$name_action, $link){
        $time = $this->update_time = $this->create_time = new CDbExpression("NOW()");
        $sql = "INSERT INTO tbl_action(user_id, action_id, action,name_action, link, create_time, update_time)
                VALUES (:UserId, :UserId, :Action,:Name_Action, :Link,:Time,:Time)";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindValue(":UserId",$user_id,PDO::PARAM_INT);
        $command->bindValue(":UserId",$action_id,PDO::PARAM_INT);
        $command->bindValue(":Action",$action ,PDO::PARAM_STR);
        $command->bindValue(":Name_Action",$name_action ,PDO::PARAM_STR);
        $command->bindValue(":Link",$link,PDO::PARAM_STR);
        $command->bindValue(":Time",$time,PDO::PARAM_STR);
        $command->bindValue(":Time",$time,PDO::PARAM_STR);
        return $command->execute() ;
    }
}