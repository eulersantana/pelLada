<?php
/* @var $this PessoaHasEstabelecimentoController */
/* @var $model PessoaHasEstabelecimento */

$this->breadcrumbs=array(
	'Pessoa Has Estabelecimentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PessoaHasEstabelecimento', 'url'=>array('index')),
	array('label'=>'Manage PessoaHasEstabelecimento', 'url'=>array('admin')),
);
?>

<h1>Create PessoaHasEstabelecimento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>