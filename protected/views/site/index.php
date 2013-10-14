<?php
/* @var $this SiteController */
/* @var $this FixinformationController */
/* @var $home Fixinformation */

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
<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs, 'nameEN'=>$name))?>

<div class="home" id="content2">
    <?php 
        if($language == Location::LANGUAGE_ENGLISH) {
            echo "<h1>Home</h1>";
            echo $home->home_en;
        }
        else {
            echo "<h1>Trang Chủ</h1>"; 
             echo $home->home;
        }
    ?>
</div>

<script> 
    <?php        if ($language == Location::LANGUAGE_ENGLISH) {?>
    $("#content2").jReadMore({
    open: 'Read Less',
    close: 'Read More',
    height: 580, 
    diff: 200 //if the height of the opened section is smaller than 40, don't apply plugin
});
    <?php }
    else { ?>
    $("#content2").jReadMore({
    open: 'Thu nhỏ',
    close: 'Đọc tiếp',
    height: 580, 
    diff: 200 //if the height of the opened section is smaller than 40, don't apply plugin
    });
    <?php }?>
</script>
<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>