<?php
/* @var $this PrivacyflagtypeController */
/* @var $model Privacyflagtype */

$this->breadcrumbs=array(
	'Privacyflagtypes'=>array('index'),
	$model->PrivacyFlagTypeId,
);

$this->menu=array(
	array('label'=>'List Privacyflagtype', 'url'=>array('index')),
	array('label'=>'Create Privacyflagtype', 'url'=>array('create')),
	array('label'=>'Update Privacyflagtype', 'url'=>array('update', 'id'=>$model->PrivacyFlagTypeId)),
	array('label'=>'Delete Privacyflagtype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PrivacyFlagTypeId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Privacyflagtype', 'url'=>array('admin')),
);
?>

<h1>View Privacyflagtype #<?php echo $model->PrivacyFlagTypeId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PrivacyFlagTypeId',
		'FieldName',
		'SortOrder',
	),
)); ?>
