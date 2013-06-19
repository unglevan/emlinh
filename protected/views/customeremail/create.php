<?php
/* @var $this CustomeremailController */
/* @var $model Customeremail */

$this->breadcrumbs=array(
	'Customeremails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Customeremail', 'url'=>array('index')),
	array('label'=>'Manage Customeremail', 'url'=>array('admin')),
);
?>

<h1>Create Customeremail</h1>

<?php echo $this->renderPartial('/customeremail/_form', array('model'=>$model)); ?>