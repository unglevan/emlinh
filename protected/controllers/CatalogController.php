<?php

class CatalogController extends Controller
{
	public function actionIndex($language = Location::LANGUAGE_ENGLISH)
	{
                $catalog = Catalog::model()->getAll();
		$catalogDDL = CHtml::listData($catalog,'nameEN', 'nameEN', 'subNameEN');
               
		if($language == Location::LANGUAGE_VIETNAMESE)
			$catalogDDL = CHtml::listData($catalog, 'nameEN', 'nameVN', 'subNameEN');

		$this->render('index', array(
			'catalogs'	=> $catalog,
			'catalogDDL'	=> $catalogDDL,
		));	
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}