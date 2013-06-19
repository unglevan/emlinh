<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminController extends Controller
{
    public $layout='//layouts/column2';
    

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
    
    public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			
		
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

    
     public function actionIndex()
 {
       $this->redirect(array('login'));
  }
	public function actionProductCreate()
	{
		$model=new Product;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('image/create','productID'=>$model->id));
		}

		$this->render('/admin/product/create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionProductUpdate($id)
	{
		$model=$this->loadProductModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('image/admin','productID'=>$model->id));
		}

		$this->render('/admin/product/update',array(
			'model'=>$model,
		));
	}
        public function actionProductDelete($id)
	{
		$this->loadProductModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin/ProductAdmin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionProductIndex()
	{
               
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('/admin/product/index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionProductDetail($ID, $color)
	{
		$product = Product::model()->findByPk($ID);
		$this->render('detail', array(
		    'model'	=> $product,
		    'color'	=> $color
		));
	}
        
        public function actionProductAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('/admin/product/admin',array(
			'model'=>$model,
		));
	}
        
        public function actionProductView($id)
	{
		$this->render('/admin/product/view',array(
			'model'=>$this->loadProductModel($id),
		));
	}
        public function loadProductModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        /*
         * Information
         */
        public function actionInformationUpdate($id = 1)
	{
		$model=Fixinformation::model()->findByPk($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Fixinformation']))
		{
			$model->attributes=$_POST['Fixinformation'];
			if($model->save())
				$this->redirect(array('/admin/information/view','id'=>$model->id));
		}

		$this->render('/admin/information/update',array(
			'model'=>$model,
		));
	}
        
      /*
       * News
       */
        public function actionNewsView($id)
	{
		$this->render('/admin/news/view',array(
			'model'=>$this->loadNewsModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionNewsCreate()
	{
		$model=new News;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
		{
			$model->attributes=$_POST['News'];
			if($model->save())
				$this->redirect(array('/admin/NewsView','id'=>$model->id));
		}

		$this->render('/admin/news/create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionNewsUpdate($id)
	{
		$model=$this->loadNewsModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
		{
			$model->attributes=$_POST['News'];
			if($model->save())
				$this->redirect(array('/admin/NewsView','id'=>$model->id));
		}

		$this->render('/admin/news/update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionNewsDelete($id)
	{
		$this->loadNewsModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('/admin/NewsAdmin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionNewsIndex()
	{
		$dataProvider=new CActiveDataProvider('News');
		$this->render('/admin/news/index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionNewsAdmin()
	{
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('/admin/news/admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadNewsModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

        	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect('ProductCreate');
		}
		// display the login form
		$this->render('/site/login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        public function actionUpload()
        {
            $this->render('/admin/upload');
        }
}

