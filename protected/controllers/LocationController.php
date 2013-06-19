<?php

class LocationController extends Controller
{
	public function actionIndex($language = Location::LANGUAGE_ENGLISH)
	{
		
		$cities = Location::model()->getAll();

		$dataDDL = CHtml::listData($cities,'id', 'nameEN');
		if($language == Location::LANGUAGE_VIETNAMESE)
			$dataDDL = CHtml::listData($cities, 'id', 'nameVN');

		$this->render('index', array(
			'cities'	=> $cities,
			'dataDDL'	=> $dataDDL,
		));	

	}
	
	/**
	 * go to homepage
	 */
	public function actionClickGo()
	{
            
            $language = $_POST['language'];
            $location = $_POST['city'];
            Yii::app()->request->cookies['language'] = new CHttpCookie('language', $language);
            Yii::app()->request->cookies['location'] = new CHttpCookie('location', $location);
		$this->redirect($this->createUrl('site/index'));
	}
}