<?php
/* @var $this FixinformationController */
/* @var $model Fixinformation */

$this->breadcrumbs=array(
	'Fixinformations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fixinformation', 'url'=>array('index')),
	array('label'=>'Create Fixinformation', 'url'=>array('create')),
	array('label'=>'View Fixinformation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fixinformation', 'url'=>array('admin')),
);
?>

<h1>Update Fixinformation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>