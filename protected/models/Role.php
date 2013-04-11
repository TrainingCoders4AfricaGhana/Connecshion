<?php

/**
 * This is the model class for table "role".
 *
 * The followings are the available columns in table 'role':
 * @property integer $RoleId
 * @property string $RoleName
 * @property integer $Enabled
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class Role extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Role the static model class
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
		return 'role';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RoleName', 'required'),
			array('Enabled', 'numerical', 'integerOnly'=>true),
			array('RoleName', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('RoleId, RoleName, Enabled', 'safe', 'on'=>'search'),
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
			'users' => array(self::MANY_MANY, 'User', 'userrole(RoleId, UserId)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RoleId' => 'Role',
			'RoleName' => 'Role Name',
			'Enabled' => 'Enabled',
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

		$criteria->compare('RoleId',$this->RoleId);
		$criteria->compare('RoleName',$this->RoleName,true);
		$criteria->compare('Enabled',$this->Enabled);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}