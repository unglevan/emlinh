<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">
<?php 
$cities = Location::model()->getAll();
$dataDDL = CHtml::listData($cities,'id', 'nameEN');

$catalog = Catalog::model()->findAll();
$catalogDDL = CHtml::listData($catalog, 'id', 'subNameVN');
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
		<?php echo $form->textArea($model,'DescriptionVN',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DescriptionVN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DescriptionEN'); ?>
		<?php echo $form->textArea($model,'DescriptionEN',array('rows'=>6, 'cols'=>50)); ?>
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
		 <?php echo CHtml::dropDownList('Product[CatalogID]', 1, $catalogDDL);?>
		<?php echo $form->error($model,'CatalogID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LocationID'); ?>
		<?php //echo CHtml::dropDownList($model,1,$dataDDL); ?>
            <?php echo CHtml::dropDownList('Product[LocationID]', 1, $dataDDL);?>
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