<?php
/* @var $this LocationController */
/* @var $form CActiveForm */
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
                margin: 0;
                padding: 0;
                height: 100%;
                
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
            #subSlogan

{
                
	position:absolute;
                
	left:170px;
                
	top:185px;
                
	height: 10px;
                
	padding: 0px 10px 0px 10px;
                
	text-decoration: none;
                
	text-align: center;
                
	font-family: "Time new Roman";
                
	font-size: 40px;
                
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
            #newsletter
            {
                position: absolute;
                top: 494px;
                background: url(images/Product/images/newsletter.jpg) ;
                width: 450px;
                height: 0px;
                left: 200px;
                
            }
            
            #newsletter .email
            {
                position: absolute;
                top: 170px;
                left: 90px;
                width: 170px;
            }
            
            #newsletter .s
            {
                position: absolute;
                top: 200px;
                left: 150px;
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
        <div id="subSlogan">
			
	Congratulations, You've Found Us
		
</div>
        <div id="p1">
            <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'location-form',
                    'action' => array("/location/clickGo"),
                    'enableAjaxValidation'=>false,
            )); ?>
            <div id="select">   
                <?php echo CHtml::dropDownList('language', Location::LANGUAGE_ENGLISH, Location::$LANGUAGE);?>
                <?php echo CHtml::dropDownList('city', '', $dataDDL, array('prompt'=>'Select location'));?>
                <?php echo Chtml::submitButton("GO")?>           
                <?php $this->endWidget();?>
            </div>  
        </div>

        <div id="newsletter">
            <form action="" method="post">
            <input class="email" type="text" name="email"><br />
            <?php echo CHtml::submitButton('Submit', array('submit'=>'/location/clickSubmit')); ?>
    </form>
	<a class="close-reveal-modal">&#215;</a>
</div>
      
        
        <script> 
    $(document).ready(function(){
       $('#newsletter').animate({
           'top':'400px',
           'height': '300px',
       }, 2000); 
    });
</script>
    </body>
    <script>
$(document).ready(function() {
    if(<?php echo $checkPopUp ?> == true){
	  $('#myModal').reveal(
	  {
		animation: 'fade',                   //fade, fadeAndPop, none
		animationspeed: 3000,                       //how fast animtions are
		closeonbackgroundclick: true,              //if you click background will modal close?
		dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
	});


    }
});
</script>



</html>