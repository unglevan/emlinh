<?php
/*@var $this ProductController*/
/* @var $model Product */
?>
<div class="images">
	<?php foreach($model->imagesAll as $image)
	{
			echo CHtml::image(Yii::app()->baseUrl."/".$image->File, 'Main image', array('width' => 100, 'height' => 120));
	}
	?>
	
</div>

<div class="main">
	
	<?php foreach($model->images as $image)
	{
		/*@var $image Image*/
		if($image->ColorEN == $color)
		{
			echo CHtml::image(Yii::app()->baseUrl."/".$image->File, 'Main image', array('width' => 360, 'height' => 480));
		}
	}
	?>
</div>

<div class="detail">
	<div class="product_name">
		<p><?php echo $model->NameEN ?></p>
	</div>
	<div>
		<p>Price:<?php echo "$".$model->PriceUSD?></p>
	</div>
	<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
	<?php foreach($model->imagesNobody as $image)
	{
	?>
	Color:
	<div class="center">
		<div>
			<a href="<?php echo $this->createUrl('', array('ID' => $model->id, "color" => $image->ColorEN)) ?>">
			<?php echo CHtml::image(Yii::app()->baseUrl."/".$image->File, 'Main image', array('width' => 70, 'height' => 90));?></div>
			</a>
		<div><?php echo $image->ColorEN;?></div>
	</div>
	<?php } ?>
	<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
	<div>
		<b>Description:</b>
		<p><?php echo $model->DescriptionEN?></p>
	</div>
</div>