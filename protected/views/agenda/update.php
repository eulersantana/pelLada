<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->pessoa_id=>array('view','id'=>$model->pessoa_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agenda', 'url'=>array('index')),
	array('label'=>'Create Agenda', 'url'=>array('create')),
	array('label'=>'View Agenda', 'url'=>array('view', 'id'=>$model->pessoa_id)),
	array('label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>Update Agenda <?php echo $model->pessoa_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>