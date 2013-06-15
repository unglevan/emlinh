<?php
/* @var $this NewsController */
/* @var $model News */

$this->menu=array(
	array('label'=>'List News', 'url'=>array('/admin/NewsIndex')),
	array('label'=>'Create News', 'url'=>array('/admin/NewsCreate')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('/admin/news/_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title_vi',
		'title_en',
		/*'content_vi',
		'content_en',
		'datepost',
		
		'type',*/
		
		array(
			'class'=>'CButtonColumn',
		 'template'=>'{delete}{update}{view}',
      'buttons'=>array
      (
      'update' => array
          (
         'url'=>'$this->grid->controller->createUrl("/admin/NewsUpdate", array("id"=>$data->primaryKey))',
         ),
          'delete' => array
          (
          'url'=>'$this->grid->controller->createUrl("/admin/NewsDelete", array("id"=>$data->primaryKey))',
          ),
           'view' => array
          (
          'url'=>'$this->grid->controller->createUrl("/admin/NewsView", array("id"=>$data->primaryKey))',
          ),
       ),
       ),
	),
)); ?>
