<?php
/* @var $this PessoaHasEstabelecimentoController */
/* @var $data PessoaHasEstabelecimento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pessoa_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pessoa_id), array('view', 'id'=>$data->pessoa_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estabelecimento_id')); ?>:</b>
	<?php echo CHtml::encode($data->estabelecimento_id); ?>
	<br />


</div>