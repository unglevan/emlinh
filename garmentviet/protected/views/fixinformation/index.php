<?php
/* @var $this FixinformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fixinformations',
);

$this->menu=array(
	array('label'=>'Create Fixinformation', 'url'=>array('create')),
	array('label'=>'Manage Fixinformation', 'url'=>array('admin')),
);
?>

<h1>Fixinformations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
