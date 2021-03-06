<?php

/**
 * This is the model class for table "catalog".
 *
 * The followings are the available columns in table 'catalog':
 * @property integer $id
 * @property string $subNameVN
 * @property string $subNameEN
 * @property string $nameEN
 * @property string $nameVN
 */
class Catalog extends CActiveRecord
{
	public function getAll()
	{
		return $this->findAll();
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Catalog the static model class
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
		return 'catalog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subNameVN, subNameEN, nameEN, nameVN', 'required'),
			array('subNameVN, subNameEN, nameEN, nameVN', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, subNameVN, subNameEN, nameEN, nameVN', 'safe', 'on'=>'search'),
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
			'subNameVN' => 'Sub Name Vn',
			'subNameEN' => 'Sub Name En',
			'nameEN' => 'Name En',
			'nameVN' => 'Name Vn',
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
		$criteria->compare('subNameVN',$this->subNameVN,true);
		$criteria->compare('subNameEN',$this->subNameEN,true);
		$criteria->compare('nameEN',$this->nameEN,true);
		$criteria->compare('nameVN',$this->nameVN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}