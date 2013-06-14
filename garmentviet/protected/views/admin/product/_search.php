<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NameVN'); ?>
		<?php echo $form->textField($model,'NameVN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NameEN'); ?>
		<?php echo $form->textField($model,'NameEN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DescriptionVN'); ?>
		<?php echo $form->textArea($model,'DescriptionVN',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DescriptionEN'); ?>
		<?php echo $form->textArea($model,'DescriptionEN',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PriceVND'); ?>
		<?php echo $form->textField($model,'PriceVND'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PriceUSD'); ?>
		<?php echo $form->textField($model,'PriceUSD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CatalogID'); ?>
		<?php echo $form->textField($model,'CatalogID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LocationID'); ?>
		<?php echo $form->textField($model,'LocationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Size'); ?>
		<?php echo $form->textField($model,'Size',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->