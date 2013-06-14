<?php
/* @var $this SiteController */
/* @var $this FixinformationController */
/* @var $home Fixinformation */

$language = Yii::app()->request->cookies['language']->value;

?>
<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>

<div class="home" id="content2">
    <?php 
        if($language == Location::LANGUAGE_ENGLISH) {
            echo "<h1>Home</h1>";
            echo $home->home_en;
        }
        else {
            echo "<h1>Trang Chủ</h1>"; 
             echo $home->home;
        }
    ?>
</div>
<script>
$(document).ready(function() {
	  $('#myModal').reveal(
	  {
		animation: 'none',                   //fade, fadeAndPop, none
		animationspeed: 300,                       //how fast animtions are
		closeonbackgroundclick: true,              //if you click background will modal close?
		dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
	});
});
</script>
<div id="myModal" class="reveal-modal">
	<h1>Reveal Modal Goodness</h1>
	<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
	<a class="close-reveal-modal">&#215;</a>
</div>
<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>