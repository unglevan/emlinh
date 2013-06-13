<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*@var $this ProductController*/
/*@var $model Product*/
?>
<div class="view">
	<div class="center">
		<a href="<?php echo $this->createUrl('product/detail', array("ID" => $model->id))?>">
		<?php echo CHtml::image(Yii::app()->baseUrl."/".$model->images[0]->File, 'New collections', array('width' => 300, 'height' => 430)); ?>
		</a>
		<p><?php echo $model->NameEN; ?>	</p>
		<p><?php echo "$".$model->PriceUSD; ?>	</p>
	</div>
</div>