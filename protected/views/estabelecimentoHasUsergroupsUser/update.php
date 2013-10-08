<?php
/* @var $this EstabelecimentoHasUsergroupsUserController */
/* @var $model EstabelecimentoHasUsergroupsUser */

$this->breadcrumbs=array(
	'Estabelecimento Has Usergroups Users'=>array('index'),
	$model->estabelecimento_id=>array('view','id'=>$model->estabelecimento_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstabelecimentoHasUsergroupsUser', 'url'=>array('index')),
	array('label'=>'Create EstabelecimentoHasUsergroupsUser', 'url'=>array('create')),
	array('label'=>'View EstabelecimentoHasUsergroupsUser', 'url'=>array('view', 'id'=>$model->estabelecimento_id)),
	array('label'=>'Manage EstabelecimentoHasUsergroupsUser', 'url'=>array('admin')),
);
?>

<h1>Update EstabelecimentoHasUsergroupsUser <?php echo $model->estabelecimento_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>