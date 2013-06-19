<?php

/**
 * This is the model class for table "Location".
 *
 * The followings are the available columns in table 'Location':
 * @property integer $id
 * @property string $nameVN
 * @property string $nameEN
 */
class Location extends CActiveRecord
{
	
	const LANGUAGE_VIETNAMESE = 1;
	const LANGUAGE_ENGLISH = 2;
	
	public static $LANGUAGE = array(
	    self::LANGUAGE_ENGLISH	=> "ENGLISH",
	    self::LANGUAGE_VIETNAMESE	=> "Tiếng Việt",
	);
	
	/**
	 * get all location table
	 * @return array
	 */
	public function getAll()
	{
		return $this->findAll();
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Location the static model class
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
		return 'Location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nameVN, nameEN', 'required'),
			array('nameVN, nameEN', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nameVN, nameEN', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nameVN' => 'Name Vn',
			'nameEN' => 'Name En',
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
		$criteria->compare('nameVN',$this->nameVN,true);
		$criteria->compare('nameEN',$this->nameEN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}