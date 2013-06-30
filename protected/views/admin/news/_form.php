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
		<?php echo $form->labelEx($model,'brief_vi'); ?>
		<?php echo $form->textField($model,'brief_vi',array('size'=>50,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'brief_vi'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'brief_en'); ?>
		<?php echo $form->textField($model,'brief_en',array('size'=>50,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'brief_en'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'image_vi'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array( 
                     "model" => $model,
		    'language' => "en-uk",
                    'attribute'=>'image_vi',
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'image_vi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_en'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array(  
                    "model" => $model,
                    'attribute'=>'image_en',
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'image_en'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'content_vi'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array( 
                     "model" => $model,
		    'language' => "en-uk",
                    'attribute'=>'content_vi',
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'content_vi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_en'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array(  
                    "model" => $model,
                    'attribute'=>'content_en',
                    'editorTemplate'=>'full')); ?>
		<?php echo $form->error($model,'content_en'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo CHtml::dropDownList('News[type]', 1, array("news","campaign"));?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->