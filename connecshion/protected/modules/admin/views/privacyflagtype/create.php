<?php
/* @var $this PrivacyflagtypeController */
/* @var $model Privacyflagtype */

$this->breadcrumbs=array(
	'Privacyflagtypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Privacyflagtype', 'url'=>array('index')),
	array('label'=>'Manage Privacyflagtype', 'url'=>array('admin')),
);
?>

<h1>Create Privacyflagtype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>