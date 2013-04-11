<?php
/* @var $this ProductGroupController */
/* @var $data ProductGroup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductGroupId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProductGroupId), array('view', 'id'=>$data->ProductGroupId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Active')); ?>:</b>
	<?php echo CHtml::encode($data->Active); ?>
	<br />


</div>