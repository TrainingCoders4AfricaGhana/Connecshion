<?php
/* @var $this RoleController */
/* @var $data Role */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RoleId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RoleId), array('view', 'id'=>$data->RoleId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RoleName')); ?>:</b>
	<?php echo CHtml::encode($data->RoleName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Enabled')); ?>:</b>
	<?php echo CHtml::encode($data->Enabled); ?>
	<br />


</div>