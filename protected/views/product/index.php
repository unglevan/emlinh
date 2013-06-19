<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

<div class="products" id="content2">
	<?php foreach($products as $product)
	{
		$this->renderPartial('product', array('model' => $product));
	}?>
</div>

<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>
