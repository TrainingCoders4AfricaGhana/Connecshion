<?php
/* @var $this PrivacyflagtypeController */
/* @var $model Privacyflagtype */

$this->breadcrumbs=array(
	'Privacyflagtypes'=>array('index'),
	$model->PrivacyFlagTypeId=>array('view','id'=>$model->PrivacyFlagTypeId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Privacyflagtype', 'url'=>array('index')),
	array('label'=>'Create Privacyflagtype', 'url'=>array('create')),
	array('label'=>'View Privacyflagtype', 'url'=>array('view', 'id'=>$model->PrivacyFlagTypeId)),
	array('label'=>'Manage Privacyflagtype', 'url'=>array('admin')),
);
?>

<h1>Update Privacyflagtype <?php echo $model->PrivacyFlagTypeId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>