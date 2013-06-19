<?php
/* @var $this FixinformationController */
/* @var $model Fixinformation */

$this->breadcrumbs=array(
	'Fixinformations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fixinformation', 'url'=>array('index')),
	array('label'=>'Manage Fixinformation', 'url'=>array('admin')),
);
?>

<h1>Create Fixinformation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>