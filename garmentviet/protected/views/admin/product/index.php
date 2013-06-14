<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);

$this->menu=array(
	array('label'=>'Create Product', 'url'=>array('/admin/productcreate')),
	array('label'=>'Manage Product', 'url'=>array('/admin/productadmin')),
);
?>

<h1>Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'/admin/product/_view',
)); ?>