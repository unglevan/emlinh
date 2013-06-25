<?php

/**
 * This is the model class for table "Product".
 *
 * The followings are the available columns in table 'Product':
 * @property integer $id
 * @property string $NameVN
 * @property string $NameEN
 * @property string $DescriptionVN
 * @property string $DescriptionEN
 * @property double $PriceVND
 * @property double $PriceUSD
 * @property integer $CatalogID
 * @property integer $LocationID
 * @property string $Date
 * @property string $Size
 */
class Product extends CActiveRecord
{
	const PRODUCT_LIMIT = 3;
	
	public function getLastestProductImage($location = Location::LANGUAGE_ENGLISH)
	{
		$condition = array(
                    'condition' => "locationID = $location",
		    'order' => "Date",
		    'limit' => self::PRODUCT_LIMIT,
		);
		return $this->findAll($condition);
	}
	
	public function getByCatalogID($catalogID, $location)
	{
		$condition = array(
		    'condition' => "CatalogID = $catalogID AND locationID = $location",
                    'order' => "Date",
		);
		return $this->findAll($condition);
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'Product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NameVN, NameEN, DescriptionVN, DescriptionEN, PriceVND, PriceUSD, CatalogID, LocationID, Size', 'required'),
			array('CatalogID, LocationID', 'numerical', 'integerOnly'=>true),
			array('PriceVND, PriceUSD', 'numerical'),
			array('NameVN, NameEN', 'length', 'max'=>50),
			array('Size', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, NameVN, NameEN, DescriptionVN, DescriptionEN, PriceVND, PriceUSD, CatalogID, LocationID, Date, Size', 'safe', 'on'=>'search'),
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
		    'images'	=> array(self::HAS_MANY, 'Image', 'ProductID', 'condition' => "Kind = 'body'"),
		    'imagesNobody'	=> array(self::HAS_MANY, 'Image', 'ProductID', 'condition' => "Kind = 'nobody'"),
		    'imagesAll'	=> array(self::HAS_MANY, 'Image', 'ProductID',),
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
			'DescriptionVN' => 'Description Vn',
			'DescriptionEN' => 'Description En',
			'PriceVND' => 'Price Vnd',
			'PriceUSD' => 'Price Usd',
			'CatalogID' => 'Catalog',
			'LocationID' => 'Location',
			'Date' => 'Date',
			'Size' => 'Size',
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
		$criteria->compare('DescriptionVN',$this->DescriptionVN,true);
		$criteria->compare('DescriptionEN',$this->DescriptionEN,true);
		$criteria->compare('PriceVND',$this->PriceVND);
		$criteria->compare('PriceUSD',$this->PriceUSD);
		$criteria->compare('CatalogID',$this->CatalogID);
		$criteria->compare('LocationID',$this->LocationID);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('Size',$this->Size,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function beforeSave() {
            $this->Date = date("Y/m/d");
            parent::beforeSave();
            return TRUE;
        }
}