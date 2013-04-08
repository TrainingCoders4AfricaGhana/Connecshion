<?php

/**
 * This is the model class for table "privacyflagtype".
 *
 * The followings are the available columns in table 'privacyflagtype':
 * @property integer $PrivacyFlagTypeId
 * @property string $FieldName
 * @property integer $SortOrder
 *
 * The followings are the available model relations:
 * @property Privacyflag[] $privacyflags
 */
class Privacyflagtype extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Privacyflagtype the static model class
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
		return 'privacyflagtype';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SortOrder', 'numerical', 'integerOnly'=>true),
			array('FieldName', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PrivacyFlagTypeId, FieldName, SortOrder', 'safe', 'on'=>'search'),
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
			'privacyflags' => array(self::HAS_MANY, 'Privacyflag', 'PrivacyFlagTypeId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PrivacyFlagTypeId' => 'Privacy Flag Type',
			'FieldName' => 'Field Name',
			'SortOrder' => 'Sort Order',
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

		$criteria->compare('PrivacyFlagTypeId',$this->PrivacyFlagTypeId);
		$criteria->compare('FieldName',$this->FieldName,true);
		$criteria->compare('SortOrder',$this->SortOrder);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}