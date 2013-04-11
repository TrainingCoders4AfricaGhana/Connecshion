<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->RoleId=>array('view','id'=>$model->RoleId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Create Role', 'url'=>array('create')),
	array('label'=>'View Role', 'url'=>array('view', 'id'=>$model->RoleId)),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<h1>Update Role <?php echo $model->RoleId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>