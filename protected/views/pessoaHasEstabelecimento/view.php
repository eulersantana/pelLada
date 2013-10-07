<?php
/* @var $this PessoaHasEstabelecimentoController */
/* @var $model PessoaHasEstabelecimento */

$this->breadcrumbs=array(
	'Pessoa Has Estabelecimentos'=>array('index'),
	$model->pessoa_id,
);

$this->menu=array(
	array('label'=>'List PessoaHasEstabelecimento', 'url'=>array('index')),
	array('label'=>'Create PessoaHasEstabelecimento', 'url'=>array('create')),
	array('label'=>'Update PessoaHasEstabelecimento', 'url'=>array('update', 'id'=>$model->pessoa_id)),
	array('label'=>'Delete PessoaHasEstabelecimento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pessoa_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PessoaHasEstabelecimento', 'url'=>array('admin')),
);
?>

<h1>View PessoaHasEstabelecimento #<?php echo $model->pessoa_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pessoa_id',
		'estabelecimento_id',
	),
)); ?>
