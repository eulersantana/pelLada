<?php
/* @var $this BrindeController */
/* @var $model Brinde */

$this->breadcrumbs=array(
	'Brindes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Brinde', 'url'=>array('index')),
	array('label'=>'Manage Brinde', 'url'=>array('admin')),
);
?>

<h1>Create Brinde</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>