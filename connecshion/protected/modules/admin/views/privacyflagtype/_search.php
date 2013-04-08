<?php
/* @var $this PrivacyflagtypeController */
/* @var $model Privacyflagtype */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PrivacyFlagTypeId'); ?>
		<?php echo $form->textField($model,'PrivacyFlagTypeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FieldName'); ?>
		<?php echo $form->textField($model,'FieldName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SortOrder'); ?>
		<?php echo $form->textField($model,'SortOrder'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->