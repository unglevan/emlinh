<?php
$language = Yii::app()->request->cookies['language']->value;

class SiteController extends Controller
{
	public $layout='//layouts/column3';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
              $contact = Fixinformation::model()->findAll();
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
			Yii::import('application.extensions.phpmailer.JPhpMailer'); 
      $mail = new JPhpMailer; $mail->IsSMTP(); 
      $mail->SetLanguage('en', 'includes/phpmailer/language/phpmailer.lang-en.php', $PHPMAILER_LANG['tls']='tls');
     $mail->SMTPSecure = "SSL";  
      $mail->Host = 'smtp.gmail.com'; 
      $mail->SMTPAuth = FALSE; 
     // $mail->SMTPSecure = true; 
      $mail->Username = 'fire271092@gmail.com'; 
      $mail->Port = '465'; 
      $mail->Password = 'ljnhxjnh'; 
      $mail->SMTPKeepAlive = true;  
      $mail->Mailer = "smtp"; 
      $mail->IsSMTP(); // telling the class to use SMTP  
      $mail->SMTPAuth   = true;  
      $mail->CharSet = 'utf-8';  
      $mail->SMTPDebug  = 0;
      $mail->SetFrom('fire271092@gmail.com', 'kyungkun'); 
      $mail->Subject = 'PHPMailer Test Subject via GMail, basic with authentication'; 
      $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
      $mail->MsgHTML('<h1>JUST A TEST!</h1>'); 
      $mail->AddAddress('linh.nguyen.1992@gmail.com', 'Thuy Linh'); $mail->Send();
      
			 
				/*$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";*/


				if ($language == Location::LANGUAGE_ENGLISH)
                                    Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                                else 
                                    Yii::app()->user->setFlash('contact','Cám ơn đã liên hệ. Chúng tôi sẽ hồi âm sớm nhất có thể.');

				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model, 'contact'=>$contact[0]));
	}
	/**
	 * Displays the login page
	 */

        public function actionNews($position = 0)
        {
            $news = News::model()->getLastestNews();
		$this->render("/site/pages/news", array(
		    'model'	=> $news,
                    'position' => $position,
		));
        }
        
         public function actionNewsAll()
        {
            $news = News::model()->getLastestNews();
		$this->render("/site/pages/newsAll", array(
		    'model'	=> $news,

		));
        }
        public function actionSaleAll()
        {
            $news = News::model()->getLastestCampaigns();
		$this->render("/site/pages/saleAll", array(
		    'model'	=> $news,
		));
        }
        

                public function actionCampaign($position = 0)
        {
            $campaign = News::model()->getLastestCampaigns();
		$this->render("/site/pages/campaign", array(
		    'model'	=> $campaign,
                    'position' => $position,
		));
        }
        
         public function actionIndex(){
             if(isset($_POST['email'])){
                 $model1 = new Customeremail();
                 $model1->email = $_POST['email'];

                 if ($model1->getIsNewRecord()){
                    $model1->save();
                 }
               
                 $this->redirect('index');
             }
            $home = Fixinformation::model()->findAll();
            $this->render("/site/index", array(
		    'home'	=> $home[0],
		));
        }
        
        public function actionAbout(){
            $about = Fixinformation::model()->findAll();

            $this->render("/site/pages/about", array(
		    'about'	=> $about[0],
		));
        }
        
        public function actionShoppingguide(){
            $shopping = Fixinformation::model()->findAll();
            $this->render("/site/pages/shoppingguide", array(
		    'shopping'	=> $shopping[0],
		));
        }
        

                public function render($view, $data = null, $return = false)
	{
                $location =  Yii::app()->request->cookies['location']->value;
		$data["catalogs"] = Catalog::model()->getAll();
               
		$data['productImages'] = Product::model()->getLastestProductImage($location); 
		parent::render($view, $data, $return);
	}
        
}