<?php
/* @var $this EstabelecimentoHasUsergroupsUserController */
/* @var $model EstabelecimentoHasUsergroupsUser */

$this->breadcrumbs=array(
	'Estabelecimento Has Usergroups Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstabelecimentoHasUsergroupsUser', 'url'=>array('index')),
	array('label'=>'Manage EstabelecimentoHasUsergroupsUser', 'url'=>array('admin')),
);
?>

<h1>Create EstabelecimentoHasUsergroupsUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>