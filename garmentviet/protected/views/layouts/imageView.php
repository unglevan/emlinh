<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="Rightsidebar">
	<?php 
	foreach($productImages as $pro)
	{
		/*@var $pro Product*/
	?>
		<div class="pa10">
		<?php
			echo CHtml::image(Yii::app()->baseUrl."/".$pro->images[0]->File, 'New collections', array('width' => 100, 'height' => 120));
		?>
		</div>
	<?php	
	}
	?>
	
	
	
</div>