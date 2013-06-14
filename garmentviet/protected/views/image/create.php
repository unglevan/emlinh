<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Create',
);

?>

<h1>Create Image</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>