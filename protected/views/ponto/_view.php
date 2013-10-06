<?php
/* @var $this PontoController */
/* @var $data Ponto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pessoa_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pessoa_id), array('view', 'id'=>$data->pessoa_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pontuacao')); ?>:</b>
	<?php echo CHtml::encode($data->pontuacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escore')); ?>:</b>
	<?php echo CHtml::encode($data->escore); ?>
	<br />


</div>