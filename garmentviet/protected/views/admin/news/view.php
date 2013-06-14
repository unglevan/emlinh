<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('/admin/NewsIndex'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('/admin/NewsIndex')),
	array('label'=>'Create News', 'url'=>array('/admin/NewsCreate')),
	array('label'=>'Update News', 'url'=>array('/admin/NewsUpdate', 'id'=>$model->id)),
	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('/admin/NewsDelete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('/admin/NewsAdmin')),
);
?>

<h1>View News #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title_vi',
		'title_en',
		'content_vi',
		'content_en',
		'datepost',
		'type',
	),
)); ?>
