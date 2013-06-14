<?php
/* @var $this SiteController */
/*@var $model News */
$language = Yii::app()->request->cookies['language']->value;

if ($language == Location::LANGUAGE_ENGLISH){
    $this->pageTitle=Yii::app()->name . ' - Campaign';
    $this->breadcrumbs=array(
	'Campaign',
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
    <h1>Campaign</h1>
    <h2><center><?php echo $model[0]->title_en?></center></h2>
    <p><?php echo $model[0]->content_en ?></p>
       <?php } 
       else {?>
       <h1>Khuyến Mại</h1>; 
         <h2><center><?php echo $model[0]->title_vi?></center></h2>
    <p><?php echo $model[0]->content_vi ?></p>
       <?php }
    ?>
</div>



<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>
