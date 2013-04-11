<?php
/* @var $this ProductGroupController */
/* @var $model ProductGroup */

$this->breadcrumbs=array(
	'Product Groups'=>array('index'),
	$model->ProductGroupId=>array('view','id'=>$model->ProductGroupId),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductGroup', 'url'=>array('index')),
	array('label'=>'Create ProductGroup', 'url'=>array('create')),
	array('label'=>'View ProductGroup', 'url'=>array('view', 'id'=>$model->ProductGroupId)),
	array('label'=>'Manage ProductGroup', 'url'=>array('admin')),
);
?>

<h1>Update ProductGroup <?php echo $model->ProductGroupId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>