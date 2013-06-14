<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('/admin/ProductIndex')),
	array('label'=>'Manage Product', 'url'=>array('/admin/ProductAdmin')),
);
?>

<h1>Create Product</h1>

<?php echo $this->renderPartial('/admin/product/_form', array('model'=>$model)); ?>