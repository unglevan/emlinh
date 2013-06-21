<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$language =Yii::app()->request->cookies['language']->value;
?>
<div id="Rightsidebar">
	<?php 
        if ($language == Location::LANGUAGE_ENGLISH) echo "<h3>New Collections</h3>";
        else echo "<h3> Bộ Sưu Tập Mới</h3>";

foreach($productImages as $pro)
	{
		/*@var $pro Product*/
	?>
		<div class="pa10">
                    <a href="<?php echo $this->createUrl('product/detail', array("ID" => $pro->id, 'color'=>$pro->images[0]->ColorEN))?>">
		<?php
			echo CHtml::image(Yii::app()->baseUrl."/".$pro->images[0]->File, 'New collections', array('width' => 100, 'height' => 120));
		?>
		</div>
	<?php	
	}
	?>
	
	
	
</div>