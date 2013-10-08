<?php
/* @var $this PessoaHasEstabelecimentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pessoa Has Estabelecimentos',
);

$this->menu=array(
	array('label'=>'Create PessoaHasEstabelecimento', 'url'=>array('create')),
	array('label'=>'Manage PessoaHasEstabelecimento', 'url'=>array('admin')),
);
?>

<h1>Pessoa Has Estabelecimentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
