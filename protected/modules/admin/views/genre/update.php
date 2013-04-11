<?php
/* @var $this GenreController */
/* @var $model Genre */

$this->breadcrumbs=array(
	'Genres'=>array('index'),
	$model->GenreId=>array('view','id'=>$model->GenreId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Genre', 'url'=>array('index')),
	array('label'=>'Create Genre', 'url'=>array('create')),
	array('label'=>'View Genre', 'url'=>array('view', 'id'=>$model->GenreId)),
	array('label'=>'Manage Genre', 'url'=>array('admin')),
);
?>

<h1>Update Genre <?php echo $model->GenreId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>