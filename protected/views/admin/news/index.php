<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News',
);

$this->menu=array(
	array('label'=>'Create News', 'url'=>array('/admin/NewsCreate')),
	array('label'=>'Manage News', 'url'=>array('/admin/NewsAdmin')),
);
?>

<h1>News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'/admin/news/_view',
)); ?>
