<?php
/* @var $this AdminManagerController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);


?>

<h1>Update Admin <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>