<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('/admin/NewsIndex'),
	'Create',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('/admin/NewsIndex')),
	array('label'=>'Manage News', 'url'=>array('/admin/NewsAdmin')),
);
?>

<h1>Create News</h1>

<?php echo $this->renderPartial('/admin/news/_form', array('model'=>$model)); ?>