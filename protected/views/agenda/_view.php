<?php
/* @var $this AgendaController */
/* @var $data Agenda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usergroups_user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usergroups_user_id), array('view', 'id'=>$data->usergroups_user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estabelecimento_id')); ?>:</b>
	<?php echo CHtml::encode($data->estabelecimento_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>