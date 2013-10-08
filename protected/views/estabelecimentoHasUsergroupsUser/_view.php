<?php
/* @var $this EstabelecimentoHasUsergroupsUserController */
/* @var $data EstabelecimentoHasUsergroupsUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('estabelecimento_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->estabelecimento_id), array('view', 'id'=>$data->estabelecimento_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usergroups_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->usergroups_user_id); ?>
	<br />


</div>