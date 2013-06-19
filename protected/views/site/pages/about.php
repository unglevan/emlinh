<?php
/* @var $this SiteController */
/* @var $this FixinformationController */
/* @var $about Fixinformation */

$language = Yii::app()->request->cookies['language']->value;

if ($language == Location::LANGUAGE_ENGLISH){
    $this->pageTitle=Yii::app()->name . ' - About';
    $this->breadcrumbs=array(
	'About',
    );
}

else
{
    $this->pageTitle=Yii::app()->name . ' - Giới Thiệu';
    $this->breadcrumbs=array(
	'Giới Thiệu',
    );
}
?>
<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

<div class="about" id="content2">
    <?php 
       if($language == Location::LANGUAGE_ENGLISH) {
            echo "<h1>About US</h1>";
            echo $about->about_en;
        }
        else {
            echo "<h1>Giới thiệu</h1>"; 
             echo $about->about;
        }
    ?>
</div>

<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>