<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $title_vi
 * @property string $title_en
 * @property string $content_vi
 * @property string $content_en
 * @property string $datepost
 * @property string $type
 */
class News extends CActiveRecord
{
   public function getLastestNews()
	{
		$condition = array(
                    'condition' =>"type = 1",
		    'order' => "datepost",
		);
		return $this->findAll($condition);
	}
        
        public function getLastestCampaigns()
	{
		$condition = array(
                    'condition' =>"type = 2",
		    'order' => "datepost",
		);
		return $this->findAll($condition);
	}

    /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return News the static model class
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
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_vi, title_en, content_vi, content_en, type', 'required'),
			array('title_vi, title_en', 'length', 'max'=>50),
			array('type', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title_vi, title_en, content_vi, content_en, datepost, type', 'safe', 'on'=>'search'),
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
			'title_vi' => 'Title Vi',
			'title_en' => 'Title En',
			'content_vi' => 'Content Vi',
			'content_en' => 'Content En',
			'datepost' => 'Datepost',
			'type' => 'Type',
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
		$criteria->compare('title_vi',$this->title_vi,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('content_vi',$this->content_vi,true);
		$criteria->compare('content_en',$this->content_en,true);
		$criteria->compare('datepost',$this->datepost,true);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function beforeSave() {
            $this->datepost = date("Y/m/d");
            parent::beforeSave();
            return true;
        }
}