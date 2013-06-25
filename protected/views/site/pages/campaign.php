<?php
/* @var $this SiteController */
/*@var $model News */
$language = Yii::app()->request->cookies['language']->value;

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
    <h1>Sale</h1>
    <h2><center><?php echo $model[$position]->title_en?></center></h2>
    <h6><?php echo $model[$position]->datepost ?></h6>
    <p><?php echo $model[$position]->content_en ?></p>
      <HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
      <p><b>Others Sales</b></p>
      <ul>
       <?php 
             for($i = 1; $i<6 && $i < count($model)-$position; $i++) 
             {
                 ?>
          <li> <a href="<?php echo $this->createUrl('news', array("position" => $i+$position))?>">
          <?php echo $model[$position + $i]->title_en."(".$model[$position + $i]->datepost.")" ?></a></li><br />
           <?php }
              echo '</ul>';
        } 
       else {?>
       <h1>Khuyến Mại</h1>; 
         <h2><center><?php echo $model[0]->title_vi?></center></h2>
        <h6><?php echo $model[$position]->datepost ?></h6>
         <p><?php echo $model[0]->content_vi ?></p>
        <HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
      <p><b>Các tin khuyến mại cũ hơn</b></p>
      <ul>
       <?php 
             for($i = 1; $i<6 && $i < count($model)-$position; $i++) 
             {
                 ?>
      <li><a href="<?php echo $this->createUrl('news', array("position" => $i+$position))?>">
          <?php echo $model[$position + $i]->title_vi."(".$model[$position + $i]->datepost.")" ?></a></li>
       <?php }
 echo '</ul>';
       }
    ?>
</div>



<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>
