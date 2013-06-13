<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title_vi'); ?>
		<?php echo $form->textField($model,'title_vi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title_vi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_en'); ?>
		<?php echo $form->textField($model,'title_en',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_vi'); ?>
		<?php echo $form->textArea($model,'content_vi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content_vi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_en'); ?>
		<?php echo $form->textArea($model,'content_en',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datepost'); ?>
		<?php echo $form->textField($model,'datepost'); ?>
		<?php echo $form->error($model,'datepost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->