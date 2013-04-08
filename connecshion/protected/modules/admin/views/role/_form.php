<?php
/* @var $this RoleController */
/* @var $model Role */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RoleName'); ?>
		<?php echo $form->textField($model,'RoleName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RoleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Enabled'); ?>
		<?php echo $form->textField($model,'Enabled'); ?>
		<?php echo $form->error($model,'Enabled'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->