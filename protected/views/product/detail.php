<?php
/*@var $this ProductController*/
/* @var $model Product */
$language =Yii::app()->request->cookies['language']->value;

?>
<div class="images" id="left">
	<?php foreach($model->imagesAll as $image)
	{
                if ($image->ColorEN == $color){
            ?>      
        <button onclick="changeImage('<?php echo Yii::app()->baseUrl."/".$image->File?>')">
           <img  class="ImageLeft" src="<?php echo Yii::app()->baseUrl."/".$image->File?>" alt="none" width="100" height="120"></img></button> 
        <?php
                }
	}
	?>
	
</div>

<div class="main">
	
	<?php foreach($model->images as $image)
	{
		/*@var $image Image*/
		if($image->ColorEN == $color)
		{?>
			 <img  id="ImageContent" src="<?php echo Yii::app()->baseUrl."/".$image->File?>" alt="none" width="100" height="120"></img>
		<?php }
	}
	?>
    <div class="detail" id="right">
	<div class="product_name">
		<p><?php 
                if ($language == Location::LANGUAGE_ENGLISH)
                    echo "<h3>".$model->NameEN."</h3>" ;
                else {
                    echo "<h3>".$model->NameVN."</h3>";
                }
                    ?>
                </p>
	</div>
	<div>
		<p><?php 
                if($language == Location::LANGUAGE_ENGLISH)
                    echo "Price: $".$model->PriceUSD ;
                else {
                    echo "Giá: ".$model->PriceVND." VND";
                }?></p>
	</div>
	<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
        <?php 
                if ($language == Location::LANGUAGE_ENGLISH)
                    echo "<h3>Color</h3>" ;
                else {
                    echo "<h3>Màu sắc</h3>";
                }
                    ?>
	<?php foreach($model->imagesNobody as $image)
	{
	?>
	
	<div class="center">
            <div>
			<a href="<?php echo $this->createUrl('', array('ID' => $model->id, "color" => $image->ColorEN)) ?>">
			<?php echo CHtml::image(Yii::app()->baseUrl."/".$image->File, 'Main image', array('width' => 70, 'height' => 90));?></div>
			</a>
		<div><p><?php 
                if($language == Location::LANGUAGE_ENGLISH)echo $image->ColorEN;
                else echo $image->Color;?></p></div>
	</div>
	<?php } ?>
	<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
	<div>
		<p><?php 
                if ($language == Location::LANGUAGE_ENGLISH)echo "<h3>Description</h3>".$model->DescriptionEN;
                else echo "<h3>Mô tả</h3>".$model->DescriptionVN;?></p>
                <HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>
	</div>
</div>
</div>

 <script type="text/javascript">
             function changeImage(Str) {
                 document.getElementById("ImageContent").src = Str;
                 
             }

         </script>
