<?php
/* @var $this BrindeController */
/* @var $model Brinde */
?>
<div class="container_12 p1">

<h1>View Brinde #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'pontuacao',
	),
)); ?>

</div>