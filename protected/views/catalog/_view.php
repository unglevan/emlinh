<?php
/* @var $this CatalogController */
/* @var $data Catalog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subNameVN')); ?>:</b>
	<?php echo CHtml::encode($data->subNameVN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subNameEN')); ?>:</b>
	<?php echo CHtml::encode($data->subNameEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameEN')); ?>:</b>
	<?php echo CHtml::encode($data->nameEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameVN')); ?>:</b>
	<?php echo CHtml::encode($data->nameVN); ?>
	<br />


</div>