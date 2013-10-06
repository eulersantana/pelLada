<?php
/* @var $this EventoController */
/* @var $model Evento */
?>
<div class="container_12 p1">

<h1>View Evento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'estabelecimento_id',
		'atracao',
		'descricao',
		'data',
		'imagem',
		'preco',
	),
)); ?>

</div>