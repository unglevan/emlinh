<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('/admin/NewsIndex'),
	$model->id=>array('/admin/NewsView','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('/admin/NewsIndex')),
	array('label'=>'Create News', 'url'=>array('/admin/NewsCreate')),
	array('label'=>'View News', 'url'=>array('/admin/NewsView', 'id'=>$model->id)),
	array('label'=>'Manage News', 'url'=>array('/admin/NewsAdmin')),
);
?>

<h1>Update News <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('/admin/news/_form', array('model'=>$model)); ?>