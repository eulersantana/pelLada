<?php
/* @var $this BrindeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Brindes',
);

$this->menu=array(
	array('label'=>'Create Brinde', 'url'=>array('create')),
	array('label'=>'Manage Brinde', 'url'=>array('admin')),
);
?>

<h1>Brindes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
