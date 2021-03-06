<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('/admin/ProductIndex')),
	array('label'=>'Create Product', 'url'=>array('/admin/ProductCreate')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('/admin/product/_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'NameVN',
		'NameEN',
		/*'DescriptionVN',
		'DescriptionEN',
		'PriceVND',
		
		'PriceUSD',
		'CatalogID',
		'LocationID',
		'Date',
		'Size',*/
		
		array(
			'class'=>'CButtonColumn',
		
            'template'=>'{delete}{update}{view}',
       'buttons'=>array
      (
        'update' => array
          (
          'url'=>'$this->grid->controller->createUrl("/admin/ProductUpdate", array("id"=>$data->primaryKey))',
          ),
          'delete' => array
          (
          'url'=>'$this->grid->controller->createUrl("/admin/ProductDelete", array("id"=>$data->primaryKey))',
          ),
           'view' => array
          (
          'url'=>'$this->grid->controller->createUrl("/admin/ProductView", array("id"=>$data->primaryKey))',
         ),
       ),
      ),
            ),
	
)); ?>
