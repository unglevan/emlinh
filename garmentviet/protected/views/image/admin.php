<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Manage',
);

?>

<h1>Manage Images</h1>
<?php
    foreach($model as $pro)
	{
		/*@var $pro Product*/
	?>
		
                    <a href="<?php echo $this->createUrl('/image/update/'.$pro->id)?>">
		<?php
			echo CHtml::image(Yii::app()->baseUrl."/".$pro->File, 'Images', array('width' => 100, 'height' => 120));
		?>
		
	<?php	
	}
        ?>