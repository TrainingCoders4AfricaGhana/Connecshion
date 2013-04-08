<?php
/* @var $this PrivacyflagtypeController */
/* @var $model Privacyflagtype */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'privacyflagtype-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FieldName'); ?>
		<?php echo $form->textField($model,'FieldName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'FieldName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SortOrder'); ?>
		<?php echo $form->textField($model,'SortOrder'); ?>
		<?php echo $form->error($model,'SortOrder'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->