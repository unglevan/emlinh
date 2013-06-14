<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('/admin/ProductIndex')),
	array('label'=>'Create Product', 'url'=>array('/admin/ProductCreate')),
	array('label'=>'Update Product', 'url'=>array('/admin/ProductUpdate', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('/admin/ProductDelete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('/admin/ProductAdmin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'NameVN',
		'NameEN',
		'DescriptionVN',
		'DescriptionEN',
		'PriceVND',
		'PriceUSD',
		'CatalogID',
		'LocationID',
		'Date',
		'Size',
	),
)); ?>
