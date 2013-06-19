<?php
/* @var $this FixinformationController */
/* @var $model Fixinformation */

$this->breadcrumbs=array(
	'Fixinformations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fixinformation', 'url'=>array('index')),
	array('label'=>'Create Fixinformation', 'url'=>array('create')),
	array('label'=>'Update Fixinformation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fixinformation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fixinformation', 'url'=>array('admin')),
);
?>

<h1>View Fixinformation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'home',
		'about',
		'shopping',
		'contact',
		'home_en',
		'about_en',
		'shopping_en',
		'contact_en',
	),
)); ?>
