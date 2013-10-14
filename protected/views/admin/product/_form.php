<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">
<?php 
$cities = Location::model()->getAll();
$dataDDL = CHtml::listData($cities,'id', 'nameEN');

$catalog = Catalog::model()->findAll(array(
    'select'=>'nameEN',
    'group'=>'nameEN',
    'distinct'=>true,
));
$catalogDDL = CHtml::listData($catalog, 'nameEN', 'nameEN');
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NameVN'); ?>
		<?php echo $form->textField($model,'NameVN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NameVN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NameEN'); ?>
		<?php echo $form->textField($model,'NameEN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NameEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescriptionVN'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array(  
                    "model" => $model,
                    'attribute'=>'DescriptionVN',
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'DescriptionVN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescriptionEN'); ?>
		<<?php $this->widget('application.extensions.ckeditor.CKEditor', array(  
                    "model" => $model,
                    'attribute'=>'DescriptionEN',
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'DescriptionEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PriceVND'); ?>
		<?php echo $form->textField($model,'PriceVND'); ?>
		<?php echo $form->error($model,'PriceVND'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PriceUSD'); ?>
		<?php echo $form->textField($model,'PriceUSD'); ?>
		<?php echo $form->error($model,'PriceUSD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CatalogID'); ?>
		 <?php // echo CHtml::dropDownList('Product[CatalogID]', 1, $catalogDDL);
                  $this->widget('ext.combobox.EJuiComboBox', array(
    'model' => $model,
    'attribute' => 'CatalogID',
    // data to populate the select. Must be an array.
    'data' => $catalogDDL,
    // options passed to plugin
    'options' => array(

        'allowText' => true,
    ),
    // Options passed to the text input
    'htmlOptions' => array('size' => 10),
));?>
		<?php echo $form->error($model,'CatalogID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LocationID'); ?>
		<?php //echo CHtml::dropDownList($model,1,$dataDDL); ?>
            <?php //echo CHtml::dropDownList('Product[LocationID]', $model->LocationID, $dataDDL);
            $this->widget('ext.combobox.EJuiComboBox', array(
    'model' => $model,
    'attribute' => 'LocationID',
    // data to populate the select. Must be an array.
    'data' => $dataDDL,
    // options passed to plugin
    'options' => array(

        'allowText' => true,
    ),
    // Options passed to the text input
    'htmlOptions' => array('size' => 10),
));?>
		<?php echo $form->error($model,'LocationID'); ?>
	</div>
        
     

	<div class="row">
		<?php echo $form->labelEx($model,'Size'); ?>
		<?php echo $form->textField($model,'Size',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Size'); ?>
	</div>
        
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->