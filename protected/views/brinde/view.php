<?php
/* @var $this BrindeController */
/* @var $model Brinde */

$this->breadcrumbs=array(
	'Brindes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Brinde', 'url'=>array('index')),
	array('label'=>'Create Brinde', 'url'=>array('create')),
	array('label'=>'Update Brinde', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Brinde', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brinde', 'url'=>array('admin')),
);
?>

<h1>View Brinde #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'pontuacao',
		'imagem',
	),
)); ?>
