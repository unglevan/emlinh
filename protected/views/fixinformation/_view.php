<?php
/* @var $this FixinformationController */
/* @var $data Fixinformation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home')); ?>:</b>
	<?php echo CHtml::encode($data->home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about')); ?>:</b>
	<?php echo CHtml::encode($data->about); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopping')); ?>:</b>
	<?php echo CHtml::encode($data->shopping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_en')); ?>:</b>
	<?php echo CHtml::encode($data->home_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_en')); ?>:</b>
	<?php echo CHtml::encode($data->about_en); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shopping_en')); ?>:</b>
	<?php echo CHtml::encode($data->shopping_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_en')); ?>:</b>
	<?php echo CHtml::encode($data->contact_en); ?>
	<br />

	*/ ?>

</div>