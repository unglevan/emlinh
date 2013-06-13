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
		$this->redirect($this->createUrl('site/index'));
	}
}