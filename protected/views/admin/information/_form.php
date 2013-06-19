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
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'home',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'about',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopping'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'shopping',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'shopping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'contact',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_en'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'home_en',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'home_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_en'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'about_en',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'about_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopping_en'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'shopping_en',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'shopping_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_en'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array( 
                     "model" => $model,
                    'attribute'=>'contact_en',
                    'useSwitch' => false,
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'contact_en'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->