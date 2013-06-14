<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*@var $this ProductController*/
/*@var $model Product*/
$language =Yii::app()->request->cookies['language']->value;
?>

	<div class="center">
		<a href="<?php echo $this->createUrl('product/detail', array("ID" => $model->id, 'color'=>$model->images[0]->ColorEN))?>">
		<?php echo CHtml::image(Yii::app()->baseUrl."/".$model->images[0]->File, 'New collections', array('width' => 300, 'height' => 430)); ?>
		</a>
                <?php 
                if ($language == 2)
                {?>
                    <p><?php echo $model->NameEN; ?>	</p>
                    <p><?php echo " $".$model->PriceUSD; ?>	</p>
                 <?php 
                }
                else {?>
                     <p><?php echo $model->NameVN; ?>	</p>
                    <p><?php echo $model->PriceVND." VND"; ?>	</p>
                    <?php }?>
	</div>
