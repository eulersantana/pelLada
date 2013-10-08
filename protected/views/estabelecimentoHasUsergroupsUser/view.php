<?php
/* @var $this EstabelecimentoHasUsergroupsUserController */
/* @var $model EstabelecimentoHasUsergroupsUser */

$this->breadcrumbs=array(
	'Estabelecimento Has Usergroups Users'=>array('index'),
	$model->estabelecimento_id,
);

$this->menu=array(
	array('label'=>'List EstabelecimentoHasUsergroupsUser', 'url'=>array('index')),
	array('label'=>'Create EstabelecimentoHasUsergroupsUser', 'url'=>array('create')),
	array('label'=>'Update EstabelecimentoHasUsergroupsUser', 'url'=>array('update', 'id'=>$model->estabelecimento_id)),
	array('label'=>'Delete EstabelecimentoHasUsergroupsUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->estabelecimento_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstabelecimentoHasUsergroupsUser', 'url'=>array('admin')),
);
?>

<h1>View EstabelecimentoHasUsergroupsUser #<?php echo $model->estabelecimento_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'estabelecimento_id',
		'usergroups_user_id',
	),
)); ?>
