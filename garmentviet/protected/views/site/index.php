<?php
/* @var $this SiteController */
?>

<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

<!--conten thi viet vao day-->

<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>
