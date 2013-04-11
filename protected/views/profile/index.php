<?php
/* @var $this ProfileController */

$this->breadcrumbs=array(
	'Profile',
);
?>

<?php if(Yii::app()->user->hasFlash('success')):?>
<div class="success">
<?php echo Yii::app()->user->getFlash('success')?>
</div>
<?php endif?>
<?php if(Yii::app()->user->hasFlash('success')):?>
	<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('success')?>
	</div>
<?php endif?>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
	
</p>
