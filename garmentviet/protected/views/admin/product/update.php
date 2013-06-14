<?php
/* @var $this ProductController */
/* @var $model Product */


$this->menu=array(
	array('label'=>'List Product', 'url'=>array('admin/ProductIndex')),
	array('label'=>'Create Product', 'url'=>array('admin/ProductCreate')),
	array('label'=>'View Product', 'url'=>array('admin/ProductView', 'id'=>$model->id)),
	array('label'=>'Manage Product', 'url'=>array('admin/ProductAdmin')),
);
?>

<h1>Update Product <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('/admin/product/_form', array('model'=>$model)); ?>
