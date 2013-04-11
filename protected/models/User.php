<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $UserId
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property integer $EmailVerified
 * @property string $Zip
 * @property string $Username
 * @property string $Password
 * @property string $Country
 * @property string $City
 * @property string $Guid
 * @property string $UserType
 *
 * The followings are the available model relations:
 * @property Connection[] $connections
 * @property Connection[] $connections1
 * @property Endorse[] $endorses
 * @property Endorse[] $endorses1
 * @property Event[] $events
 * @property Inbox[] $inboxes
 * @property Inbox[] $inboxes1
 * @property Event[] $events1
 * @property Place[] $places
 * @property Privacyflag[] $privacyflags
 * @property Product[] $products
 * @property Pub[] $pubs
 * @property Rate[] $rates
 * @property Role[] $roles
 * @property Video[] $videos
 */
class User extends CActiveRecord
{
	
	public function AllUserType()
	{
		return CHtml::listData(UserType::model()->findAll(),'UserTypeId','UserTypeLabelEn');
		//return array('Designer','Agent');
	}
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EmailVerified', 'numerical', 'integerOnly'=>true),
			array('FirstName, LastName, Username', 'length', 'max'=>50),
			array('Email, Password, Guid', 'length', 'max'=>200),
			array('Zip, Country, City, UserType', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('UserId, FirstName, LastName, Email, EmailVerified, Zip, Username, Password, Country, City, Guid, UserType', 'safe', 'on'=>'search'),
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
			'connections' => array(self::HAS_MANY, 'Connection', 'UserId'),
			'connections1' => array(self::HAS_MANY, 'Connection', 'UserId3'),
			'endorses' => array(self::HAS_MANY, 'Endorse', 'EndorserId'),
			'endorses1' => array(self::HAS_MANY, 'Endorse', 'EndorsedId'),
			'events' => array(self::HAS_MANY, 'Event', 'UserId'),
			'inboxes' => array(self::HAS_MANY, 'Inbox', 'SenderId'),
			'inboxes1' => array(self::HAS_MANY, 'Inbox', 'ReceiverId'),
			'events1' => array(self::MANY_MANY, 'Event', 'participate(UserId, EventId)'),
			'places' => array(self::HAS_MANY, 'Place', 'UserId'),
			'privacyflags' => array(self::HAS_MANY, 'Privacyflag', 'UserId'),
			'products' => array(self::HAS_MANY, 'Product', 'UserId'),
			'pubs' => array(self::HAS_MANY, 'Pub', 'UserId'),
			'rates' => array(self::HAS_MANY, 'Rate', 'RaterId'),
			'roles' => array(self::MANY_MANY, 'Role', 'userrole(UserId, RoleId)'),
			'videos' => array(self::HAS_MANY, 'Video', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'UserId' => 'User',
			'FirstName' => 'First Name',
			'LastName' => 'Last Name',
			'Email' => 'Email',
			'EmailVerified' => 'Email Verified',
			'Zip' => 'Zip',
			'Username' => 'Username',
			'Password' => 'Password',
			'Country' => 'Country',
			'City' => 'City',
			'Guid' => 'Guid',
			'UserType' => 'User Type',
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

		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('EmailVerified',$this->EmailVerified);
		$criteria->compare('Zip',$this->Zip,true);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('City',$this->City,true);
		$criteria->compare('Guid',$this->Guid,true);
		$criteria->compare('UserType',$this->UserType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}