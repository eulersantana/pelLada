<?php
/* @var $this BrindeController */
/* @var $model Brinde */

$this->breadcrumbs=array(
	'Brindes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Brinde', 'url'=>array('index')),
	array('label'=>'Create Brinde', 'url'=>array('create')),
	array('label'=>'View Brinde', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Brinde', 'url'=>array('admin')),
);
?>

<h1>Update Brinde <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>