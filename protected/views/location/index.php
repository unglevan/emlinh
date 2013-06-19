<?php
/* @var $this LocationController */
/* @var $form CActiveForm */
$language = Yii::app()->request->cookies['language']->value;
 $session=new CHttpSession;
  $session->open();
  if(!isset($session['showed']))
  {
      $session['showed'] = 1;
      $checkPopUp = true;
  }
 else {
      $checkPopUp = false;
 }

 $session->close();
?>


<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>VIET GARMENTS</title>
        <style type="text/css">
            body
            {
                background: url(images/Product/images/background.jpg) ;
                background-size: cover;
                background-repeat: no-repeat;
            }
            #Slogan
            {
                position:absolute;
                left:170px;
                top:100px;
                height: 20px;
                padding: 0px 10px 0px 10px;
                text-decoration: none;
                text-align: center;
                font-family: "Vivaldi", arial;
                font-size: 55px;
                color: #000000;
                border: none;                
            }
            #p1
            {
                position:absolute;
                left:200px;
                top:350px; 
            }
            #p1 select
            {
                font-size: .9em;
                color: #000;               
                background: url(css/selectbgr.jpg) no-repeat ;               
                padding: 5px 15px 5px 15px;
                border: none;
                height: 28px;
                width: 200px;
                -webkit-appearance: none;                   
            }           
        </style>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reveal.css" />
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->baseUrl.'/js/jquery.reveal.js');?>
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->baseUrl.'/js/jquery.expander.js');?>
	<?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>
    </head>
    <body>
        <div id="Slogan">
            The finest hands of Vietnam
        </div>
        <div id="p1">
            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'location-form',
                    'action' => array("/location/clickGo"),
                    'enableAjaxValidation'=>false,
            )); ?>
            <div id="select">   
                <?php echo CHtml::dropDownList('language', Location::LANGUAGE_ENGLISH, Location::$LANGUAGE);?>
                <?php echo CHtml::dropDownList('city', 1, $dataDDL);?>
                <?php echo Chtml::submitButton("GO")?>           
                <?php $this->endWidget();?>
            </div>  
        </div>
    </body>
</html>