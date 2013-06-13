<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NameVN')); ?>:</b>
	<?php echo CHtml::encode($data->NameVN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NameEN')); ?>:</b>
	<?php echo CHtml::encode($data->NameEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescriptionVN')); ?>:</b>
	<?php echo CHtml::encode($data->DescriptionVN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DescriptionEN')); ?>:</b>
	<?php echo CHtml::encode($data->DescriptionEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PriceVND')); ?>:</b>
	<?php echo CHtml::encode($data->PriceVND); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PriceUSD')); ?>:</b>
	<?php echo CHtml::encode($data->PriceUSD); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CatalogID')); ?>:</b>
	<?php echo CHtml::encode($data->CatalogID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LocationID')); ?>:</b>
	<?php echo CHtml::encode($data->LocationID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date')); ?>:</b>
	<?php echo CHtml::encode($data->Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Size')); ?>:</b>
	<?php echo CHtml::encode($data->Size); ?>
	<br />

	*/ ?>

</div>