<?php
/* @var $this SiteController */
/* @var $this FixinformationController */
/* @var $home Fixinformation */

$language = Yii::app()->request->cookies['language']->value;
 $session=new CHttpSession;
  $session->open();
  if(!isset($session['showed']))
  {
      $session['showed'] = 1;
      $checkPopUp = true;
  }
 else {
      $checkPopUp = false;
 }

 $session->close();
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
    if(<?php echo $checkPopUp ?> == true){
	  $('#myModal').reveal(
	  {
		animation: 'none',                   //fade, fadeAndPop, none
		animationspeed: 300,                       //how fast animtions are
		closeonbackgroundclick: true,              //if you click background will modal close?
		dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
	});

    }
});
</script>
<div id="myModal" class="reveal-modal" >
	<h1>NewLetter</h1>
        <form action="" method="post">
    <input type="text" name="email">
    <input type="submit">
    </form>
	<a class="close-reveal-modal">&#215;</a>
</div>
<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>