<?php
/* @var $this FixinformationController */
/* @var $model Fixinformation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fixinformation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home'); ?>
		<?php echo $form->textArea($model,'home',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopping'); ?>
		<?php echo $form->textArea($model,'shopping',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shopping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact'); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_en'); ?>
		<?php echo $form->textArea($model,'home_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'home_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_en'); ?>
		<?php echo $form->textArea($model,'about_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopping_en'); ?>
		<?php echo $form->textArea($model,'shopping_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shopping_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_en'); ?>
		<?php echo $form->textArea($model,'contact_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'contact_en'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->