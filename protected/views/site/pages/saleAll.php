<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/* @var $this SiteController */
/*@var $model News */
$language = Yii::app()->request->cookies['language']->value;
const News_IN_Page = 3;
$i =1;
$page = $_GET['page'];
if ($language == Location::LANGUAGE_ENGLISH){
    $this->pageTitle=Yii::app()->name . ' - Sale';
    $this->breadcrumbs=array(
	'Sale',
    );
}

else
{
    $this->pageTitle=Yii::app()->name . ' - Khuyến Mại';
    $this->breadcrumbs=array(
	'Khuyến Mại',
    );
}
?>
<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

<div class="news" id="content2">
    <?php 
        if($language == Location::LANGUAGE_ENGLISH) {
           ?>
    <h1>Sales</h1>
        <?php           
        foreach ($model as $n ) {
            if ($i > ($page-1)*News_IN_Page && $i <= $page *News_IN_Page ) {
              ?>
    
    <div id="newscontent">
        
        <div class="image">  <a href="<?php echo $this->createUrl('news', array("position" => $i))?>">
		<?php
			echo CHtml::image(Yii::app()->baseUrl."/images/Product/".$n->image, $n->title_en, array('width' => 150, 'height' => 120));
		?>
            </a></div>
        <div class ="brief">
         <a href="<?php echo $this->createUrl('site/campaign', array("position" => $i))?>">
          <?php echo "<b>".$n->title_en."</b>"; ?></a><br />
                  <?php echo $n->brief_en;?>
         
        </div>
         <div style="clear:both"></div>
         <HR width ='100%' size ='0.5' color ='#ccc' NOSHADE> </div>
         
        <?php } 
        $i++;
            }
        if (count($model) >3){
            for ($i = 1; $i <= floor(count($model)/News_IN_Page) + 1; $i++ ){
               echo CHtml::link($i, $this->createUrl('site/saleAll', array('page' => $i)));
               echo ' ';
            }
        }
        }
        
        else {
           ?>
    <h1>Tin Tức</h1>
        <?php           
        foreach ($model as $n ) {
             if ($i > ($page-1)*News_IN_Page && $i <= $page *News_IN_Page ) {
              ?>
    <div id="newscontent">
        
        <div class="image">  <a href="<?php echo $this->createUrl('campaign', array("position" => $i))?>">
		<?php
			echo CHtml::image(Yii::app()->baseUrl."/images/Product/".$n->image, $n->title_vi, array('width' => 150, 'height' => 120));
		?>
            </a></div>
        <div class ="brief">
         <a href="<?php echo $this->createUrl('campaign', array("position" => $i))?>">
          <?php echo "<b>".$n->title_vi."</b>"; ?></a><br />
                  <?php echo $n->brief_vi;?>
        </div>
         <div style="clear:both"></div> 
         <HR width ='100%' size ='0.5' color ='#ccc' NOSHADE> </div>  
  <?php }
        $i++;
            }
        if (count($model) >3){
            for ($i = 1; $i <= floor(count($model)/News_IN_Page) + 1; $i++ ){
               echo CHtml::link($i, $this->createUrl('site/saleAll', array('page' => $i)));
               echo ' ';
            }
        }
        }?>
        
   
        
    </div>
     
</div>
    <?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>