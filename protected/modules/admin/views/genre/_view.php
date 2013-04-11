<?php
/* @var $this GenreController */
/* @var $data Genre */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GenreId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GenreId), array('view', 'id'=>$data->GenreId)); ?>
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