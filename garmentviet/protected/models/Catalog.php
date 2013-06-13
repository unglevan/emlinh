<?php

/**
 * This is the model class for table "Catalog".
 *
 * The followings are the available columns in table 'Catalog':
 * @property integer $id
 * @property string $NameVN
 * @property string $NameEN
 * @property string $SubNameVN
 * @property string $SubNameEn
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
		return 'Catalog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NameVN, NameEN, SubNameVN, SubNameEn', 'required'),
			array('NameVN, NameEN, SubNameVN, SubNameEn', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, NameVN, NameEN, SubNameVN, SubNameEn', 'safe', 'on'=>'search'),
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
			'NameVN' => 'Name Vn',
			'NameEN' => 'Name En',
			'SubNameVN' => 'Sub Name Vn',
			'SubNameEn' => 'Sub Name En',
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
		$criteria->compare('NameVN',$this->NameVN,true);
		$criteria->compare('NameEN',$this->NameEN,true);
		$criteria->compare('SubNameVN',$this->SubNameVN,true);
		$criteria->compare('SubNameEn',$this->SubNameEn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}