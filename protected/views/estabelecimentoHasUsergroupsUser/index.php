<?php
/* @var $this EstabelecimentoHasUsergroupsUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estabelecimento Has Usergroups Users',
);

$this->menu=array(
	array('label'=>'Create EstabelecimentoHasUsergroupsUser', 'url'=>array('create')),
	array('label'=>'Manage EstabelecimentoHasUsergroupsUser', 'url'=>array('admin')),
);
?>

<h1>Estabelecimento Has Usergroups Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
