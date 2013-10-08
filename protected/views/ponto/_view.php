<?php
/* @var $this PontoController */
/* @var $data Ponto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usergroups_user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usergroups_user_id), array('view', 'id'=>$data->usergroups_user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pontuacao')); ?>:</b>
	<?php echo CHtml::encode($data->pontuacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escore')); ?>:</b>
	<?php echo CHtml::encode($data->escore); ?>
	<br />


</div>