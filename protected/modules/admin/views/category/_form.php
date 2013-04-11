<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CategoryName'); ?>
		<?php echo $form->textField($model,'CategoryName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CategoryName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Picture'); ?>
		<?php echo $form->textField($model,'Picture',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Picture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Active'); ?>
        <?php echo CHtml::activeCheckBox($model,'Active');?>
		<?php echo $form->error($model,'Active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->