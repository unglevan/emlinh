<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

/* @var $contac Fixinformation */

$language = Yii::app()->request->cookies['language']->value;
if ($language == Location::LANGUAGE_ENGLISH){
    $this->pageTitle=Yii::app()->name . ' - Contact';
    $this->breadcrumbs=array(
	'Contact',
    );
}

else
{
    $this->pageTitle=Yii::app()->name . ' - Liên Hệ';
    $this->breadcrumbs=array(
	'Liên Hệ',
    );
}
?>
<?php $this->renderPartial('/layouts/catalog', array('catalogs' => $catalogs))?>
<div id="content2"

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: 
    if ($language == Location::LANGUAGE_ENGLISH) {
        echo $contact->contact_en;

        echo "<p>
    If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>";
    }
    else {
         echo $contact->contact;
        echo "<p>
    Xin vui lòng điền các yêu cầu vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!
    </p>";
    }
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    <?php if ($language == Location::LANGUAGE_ENGLISH) {?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
    <?php }
    else { ?>
        <p class="note">Những ô có dấu <span class="required">*</span> là bắt buộc.</p>
    <?php }?>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
                 <?php if ($language == Location::LANGUAGE_ENGLISH) {?>
                    <div class="hint">Please enter the letters as they are shown in the image above.
                    <br/>Letters are not case-sensitive.</div>
                 <?php }
                else { ?>
                  
                 <?php }?>
		
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
</div>
<?php $this->renderPartial('/layouts/imageView', array('productImages' => $productImages))?>