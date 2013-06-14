<?php
/* @var $this SiteController */
/* @var $this FixinformationController */
/* @var $home Fixinformation */

$language = Yii::app()->request->cookies['language']->value;

?>
<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

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

<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>