<?php
/*@var $this Controller*/
/*@var $catalog Catalog*/
$nameEN = array(
    'T-shirts', "Kids Fashion", "Hand Stitched Leather"
);

$nameVN = array (
    'Áo Phông', 'Thời Trang Trẻ Em', 'Da Khâu Bằng Tay'
);

$language =Yii::app()->request->cookies['language']->value;

?>
<div id="sidebar">
	<?php
        if ($language == Location::LANGUAGE_ENGLISH)
        {
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
                                    echo CHtml::link($catalog->subNameEN, $this->createUrl('product/index', array('catalogID' => $catalog->id)))."<br />";
                    }
                    echo "<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>";
            }
        }
        
        else {
            foreach($nameVN as $name)
            {
            ?>
            <div>
                    <?php echo $name?>
            </div>

            <?php
                    foreach($catalogs as $catalog)
                    {
                            if($name == $catalog->nameVN)
                                    echo CHtml::link($catalog->subNameVN, $this->createUrl('product/index', array('catalogID' => $catalog->id)))."<br />";
                    }
                    echo "<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>";
            }
        }
	?>
  
	
</div>

