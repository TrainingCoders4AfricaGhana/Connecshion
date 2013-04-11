<?php

/**
 * This is the model class for table "genre".
 *
 * The followings are the available columns in table 'genre':
 * @property integer $GenreId
 * @property string $Description
 * @property string $Picture
 * @property integer $Active
 *
 * The followings are the available model relations:
 * @property Product[] $products
 */
class Genre extends CActiveRecord
{
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Genre the static model class
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
		return 'genre';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Description', 'required'),
			array('Active', 'numerical', 'integerOnly'=>true),
			array('Description', 'length', 'max'=>200),
			array('Picture', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('GenreId, Description, Picture, Active', 'safe', 'on'=>'search'),
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
			'products' => array(self::HAS_MANY, 'Product', 'GenreId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GenreId' => 'Genre',
			'Description' => 'Description',
			'Picture' => 'Picture',
			'Active' => 'Active',
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

		$criteria->compare('GenreId',$this->GenreId);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Picture',$this->Picture,true);
		$criteria->compare('Active',$this->Active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
}