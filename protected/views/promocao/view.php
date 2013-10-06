<?php
/* @var $this PromocaoController */
/* @var $model Promocao */
?>
<div class="container_12 p1">

<h1>View Promocao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'estabelecimento_id',
		'titulo',
		'descricao',
		'data_inicio',
		'data_fim',
		'imagem',
	),
)); ?>

</div>