<?php
/* @var $this PrivacyflagtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Privacyflagtypes',
);

$this->menu=array(
	array('label'=>'Create Privacyflagtype', 'url'=>array('create')),
	array('label'=>'Manage Privacyflagtype', 'url'=>array('admin')),
);
?>

<h1>Privacyflagtypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
