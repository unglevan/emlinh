<?php
/* @var $this ImageController */
/* @var $model Image */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'image-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'File'); ?>
		<?php echo $form->textField($model,'File',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'File'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Color'); ?>
		<?php echo $form->textField($model,'Color',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ColorEN'); ?>
		<?php echo $form->textField($model,'ColorEN',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ColorEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kind'); ?>
		<?php echo CHtml::dropDownList('Image[Kind]', 1, array('body','nobody','other'));?>
		<?php echo $form->error($model,'Kind'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->