<?php
/* @var $this LocationController */
/* @var $form CActiveForm */
?>

<div>
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'location-form',
		'action' => array("/location/clickGo"),
		'enableAjaxValidation'=>false,
	)); ?>
	<?php echo CHtml::dropDownList('language', Location::LANGUAGE_ENGLISH, Location::$LANGUAGE);?>
	<?php echo CHtml::dropDownList('city', 1, $dataDDL);?>
	<?php echo Chtml::submitButton("GO")?>
	<?php $this->endWidget();?>
</div>