<?php
/* @var $this PrivacyflagtypeController */
/* @var $data Privacyflagtype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrivacyFlagTypeId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PrivacyFlagTypeId), array('view', 'id'=>$data->PrivacyFlagTypeId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FieldName')); ?>:</b>
	<?php echo CHtml::encode($data->FieldName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SortOrder')); ?>:</b>
	<?php echo CHtml::encode($data->SortOrder); ?>
	<br />


</div>