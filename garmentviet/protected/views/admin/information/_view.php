<?php
/* @var $this ImageController */
/* @var $data Image */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('File')); ?>:</b>
	<?php echo CHtml::encode($data->File); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Color')); ?>:</b>
	<?php echo CHtml::encode($data->Color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ColorEN')); ?>:</b>
	<?php echo CHtml::encode($data->ColorEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kind')); ?>:</b>
	<?php echo CHtml::encode($data->Kind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductID')); ?>:</b>
	<?php echo CHtml::encode($data->ProductID); ?>
	<br />


</div>