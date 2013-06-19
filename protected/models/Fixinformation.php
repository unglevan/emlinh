<?php

/**
 * This is the model class for table "fixinformation".
 *
 * The followings are the available columns in table 'fixinformation':
 * @property integer $id
 * @property string $home
 * @property string $about
 * @property string $shopping
 * @property integer $contact
 * @property string $home_en
 * @property string $about_en
 * @property string $shopping_en
 * @property string $contact_en
 */
class Fixinformation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fixinformation the static model class
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
		return 'fixinformation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, home, about, shopping, contact, home_en, about_en, shopping_en, contact_en', 'required'),
			array('id, contact', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, home, about, shopping, contact, home_en, about_en, shopping_en, contact_en', 'safe', 'on'=>'search'),
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
			'id' => 'Cái này k sửa',
			'home' => 'Nội dung trang chủ bằng tiếng việt',
			'about' => 'Nội dung Về chúng tôi bằng tiếng việt',
			'shopping' => 'Nội dung Hướng dẫn mua hàng bằng tiếng việt',
			'contact' => 'Nội dung Liên Hệ bằng tiếng việt',
			'home_en' => 'Nội dung Trang Chủ bằng tiếng anh',
			'about_en' => 'Nội dung Về chúng tôi bằng tiếng anh',
			'shopping_en' => 'Nội dung Hướng dẫn mua hàng bằng tiếng anh',
			'contact_en' => 'Nội dung Liên Hệ bằng tiếng anh',
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
		$criteria->compare('home',$this->home,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('shopping',$this->shopping,true);
		$criteria->compare('contact',$this->contact);
		$criteria->compare('home_en',$this->home_en,true);
		$criteria->compare('about_en',$this->about_en,true);
		$criteria->compare('shopping_en',$this->shopping_en,true);
		$criteria->compare('contact_en',$this->contact_en,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}