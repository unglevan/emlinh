<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */
 const PRODUCT_IN_PAGE = 4; 
 $page = $_GET['page']; 
 $catalogID = $_GET['catalogID'];
 $language = Yii::app()->request->cookies['language']->value;

?>

<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

<div class="products" id="content2">
	<?php 
        $i = 0;
        foreach($products as $product)
	{
            if ($i > ($page-1)*PRODUCT_IN_PAGE)
   		$this->renderPartial('product', array('model' => $product));
            $i++;
            if ($i == $page *PRODUCT_IN_PAGE + 1) break;
	}
      echo '<div style="clear:both"></div>';
    echo '<div class="Trang2"><center>';
        
        if ($page > 1)
            echo CHtml::link('Previous', $this->createUrl('product/index', array('catalogID' => $catalogID,'page'=>$page-1)))."/";
        if ($page * PRODUCT_IN_PAGE  < count($products))
            echo CHtml::link('Next', $this->createUrl('product/index', array('catalogID' => $catalogID,'page'=>$page+1)));
        echo '<br>';
        if ($language == Location::LANGUAGE_ENGLISH) echo "  (Page ".$page."/".floor((count($products)-1)/PRODUCT_IN_PAGE + 1).")";
        else echo "  (Trang ".$page."/".floor((count($products)-1)/PRODUCT_IN_PAGE +1).")";
        echo '</center></div>';
        ?>
    
</div>

<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>
