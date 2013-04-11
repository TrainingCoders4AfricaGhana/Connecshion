<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoryId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CategoryId), array('view', 'id'=>$data->CategoryId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoryName')); ?>:</b>
	<?php echo CHtml::encode($data->CategoryName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Picture')); ?>:</b>
	<?php echo CHtml::encode($data->Picture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Active')); ?>:</b>
	<?php echo CHtml::encode($data->Active); ?>
	<br />


</div>