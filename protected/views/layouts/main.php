<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reveal.css" />
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->baseUrl.'/js/jquery.reveal.js');?>
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->baseUrl.'/js/jquery.expander.js');?>
	<?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="icon" href="/images/Product/images/logo2.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/images/Product/images/logo2.ico" type="image/x-icon" />
</head>


<div class="container">
    <div id="header"
		<div id="logo"><?php 
                $language =Yii::app()->request->cookies['language']->value;
                if ($language == Location::LANGUAGE_ENGLISH) 
                    echo CHtml::image(Yii::app()->baseUrl."/images/Product/images/logo_english.png");
                else echo CHtml::image(Yii::app()->baseUrl."/images/Product/images/logo.png");?>
                </div>
    </div>

	<div id="wrapper">
            <div id="menu">
		<?php 
                    $language =Yii::app()->request->cookies['language']->value;
                    if ($language == Location::LANGUAGE_ENGLISH)
                    {
                        $this->widget('zii.widgets.CMenu',array(
                            'items'=>array(
                                    array('label'=>'Home', 'url'=>array('/site/index')),
                                    array('label'=>'About Us', 'url'=>array('/site/about', )),
                                    array('label'=>'News', 'url'=>array('/site/news',)),
                                    array('label'=>'Campaign', 'url'=>array('/site/campaign',)),
                                    array('label'=>'Shopping Guide', 'url'=>array('/site/shoppingguide',)),
                                     array('label'=>'Contact', 'url'=>array('/site/contact')),
                            ),
                        ));
                    
                     } 
                     else
                     {
                         $this->widget('zii.widgets.CMenu',array(
                            'items'=>array(
                                    array('label'=>'Trang Chủ', 'url'=>array('/site/index')),
                                    array('label'=>'Giới Thiệu', 'url'=>array('/site/about')),
                                    array('label'=>'Tin Tức', 'url'=>array('/site/news')),
                                    array('label'=>'Khuyến Mãi', 'url'=>array('/site/campaign')),
                                    array('label'=>'Hướng Dẫn Mua Hàng', 'url'=>array('/site/shoppingguide')),
                                     array('label'=>'Liên Hệ', 'url'=>array('/site/contact')),
                            ),
                        )); 
                     }
                     ?>
                
	</div><!-- mainmenu -->
      
        </div>
    <div id="content">
	  <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
    </div>

	<?php echo $content; ?>

	<div class="clear"></div>
  
	<div id="footer">
	  <HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
		
            <b><center>All rights reserved to DKB Vietnam Co., Ltd</center></b><br/>
   
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>