<?php
/* @var $this PessoaHasEstabelecimentoController */
/* @var $model PessoaHasEstabelecimento */

$this->breadcrumbs=array(
	'Pessoa Has Estabelecimentos'=>array('index'),
	$model->pessoa_id=>array('view','id'=>$model->pessoa_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PessoaHasEstabelecimento', 'url'=>array('index')),
	array('label'=>'Create PessoaHasEstabelecimento', 'url'=>array('create')),
	array('label'=>'View PessoaHasEstabelecimento', 'url'=>array('view', 'id'=>$model->pessoa_id)),
	array('label'=>'Manage PessoaHasEstabelecimento', 'url'=>array('admin')),
);
?>

<h1>Update PessoaHasEstabelecimento <?php echo $model->pessoa_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>