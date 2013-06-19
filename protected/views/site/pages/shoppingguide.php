<?php
/* @var $this SiteController */
/* @var $shopping Fixinformation */

$language = Yii::app()->request->cookies['language']->value;

if ($language == Location::LANGUAGE_ENGLISH){
    $this->pageTitle=Yii::app()->name . ' - Shopping Guide';
    $this->breadcrumbs=array(
	'Shopping Guide',
    );
}

else
{
    $this->pageTitle=Yii::app()->name . ' - Hướng dẫn mua hàng';
    $this->breadcrumbs=array(
	'Hướng dẫn mua hàng',
    );
}
?>
<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

<div class="about" id="content2">
    <?php 
       if($language == Location::LANGUAGE_ENGLISH) {
            echo "<h1>Shopping Guide</h1>";
            echo $shopping->shopping_en;
        }
        else {
            echo "<h1>Hướng dẫn mua hàng</h1>"; 
             echo $shopping->shopping;
        }
    ?>
</div>

<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>