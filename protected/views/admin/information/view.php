<?php
/* @var $this FixinformationController */
/* @var $model Fixinformation */

$this->breadcrumbs=array(
	'Fixinformations'=>array('index'),
	$model->id,
);

$this->menu=array(
	
	array('label'=>'Update Information', 'url'=>array('admin/InformationUpdate', 'id'=>$model->id)),

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
