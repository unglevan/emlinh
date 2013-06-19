<?php
/* @var $this FixinformationController */
/* @var $model Fixinformation */

$this->breadcrumbs=array(
	'Fixinformations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Fixinformation', 'url'=>array('index')),
	array('label'=>'Create Fixinformation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fixinformation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fixinformations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fixinformation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'home',
		'about',
		'shopping',
		'contact',
		'home_en',
		/*
		'about_en',
		'shopping_en',
		'contact_en',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
