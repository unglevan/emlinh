<?php
/* @var $this CatalogController */
/* @var $model Catalog */
/* @var $form CActiveForm */
$catalog = Catalog::model()->findAll(array(
    'select'=>'nameEN',
    'group'=>'nameEN',
    'distinct'=>true,
));
$nameEN = CHtml::listData($catalog, 'nameEN', 'nameEN');


$catalog = Catalog::model()->findAll(array(
    'select'=>'nameVN',
    'group'=>'nameVN',
    'distinct'=>true,
));
$nameVN = CHtml::listData($catalog, 'nameVN', 'nameVN');

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'catalog-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        	<div class="row">
		<?php echo $form->labelEx($model,'nameEN'); ?>
		<?php //echo $form->textField($model,'nameEN',array('size'=>50,'maxlength'=>50)); 
                            $this->widget('ext.combobox.EJuiComboBox', array(
    'model' => $model,
    'attribute' => 'nameEN',
    // data to populate the select. Must be an array.
    'data' => $nameEN,
    // options passed to plugin
    'options' => array(

        'allowText' => true,
    ),
    // Options passed to the text input
    'htmlOptions' => array('size' => 10),
));?>
		<?php echo $form->error($model,'nameEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nameVN'); ?>
		<?php //echo $form->textField($model,'nameVN',array('size'=>50,'maxlength'=>50));
                            $this->widget('ext.combobox.EJuiComboBox', array(
    'model' => $model,
    'attribute' => 'nameVN',
    // data to populate the select. Must be an array.
    'data' => $nameVN,
    // options passed to plugin
    'options' => array(

        'allowText' => true,
    ),
    // Options passed to the text input
    'htmlOptions' => array('size' => 10),
));?>
		<?php echo $form->error($model,'nameVN'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'subNameVN'); ?>
		<?php echo $form->textField($model,'subNameVN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subNameVN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subNameEN'); ?>
		<?php echo $form->textField($model,'subNameEN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subNameEN'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->