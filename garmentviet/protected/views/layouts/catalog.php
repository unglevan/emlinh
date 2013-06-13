<?php
/*@var $this Controller*/
/*@var $catalog Catalog*/
$nameEN = array(
    'T-shirts', "Kids Fashion", "Hand Stitched Leather"
);

?>
<div id="sidebar">
	<?php
	foreach($nameEN as $name)
	{
	?>
	<div>
		<?php echo $name?>
	</div>
		
	<?php
		foreach($catalogs as $catalog)
		{
			if($name == $catalog->nameEN)
				echo "<div>".CHtml::link($catalog->subNameEN, $this->createUrl('product/index', array('catalogID' => $catalog->id)))."</div>";
		}
		echo "<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>";
	}
	?>
	
</div>

