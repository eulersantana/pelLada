<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->usergroups_user_id,
);

$this->menu=array(
	array('label'=>'List Agenda', 'url'=>array('index')),
	array('label'=>'Create Agenda', 'url'=>array('create')),
	array('label'=>'Update Agenda', 'url'=>array('update', 'id'=>$model->usergroups_user_id)),
	array('label'=>'Delete Agenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usergroups_user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>View Agenda #<?php echo $model->usergroups_user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'estabelecimento_id',
		'data',
		'status',
		'usergroups_user_id',
	),
)); ?>
