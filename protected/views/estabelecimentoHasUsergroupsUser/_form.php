<?php
/* @var $this EstabelecimentoHasUsergroupsUserController */
/* @var $model EstabelecimentoHasUsergroupsUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estabelecimento-has-usergroups-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'estabelecimento_id'); ?>
		<?php echo $form->textField($model,'estabelecimento_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'estabelecimento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usergroups_user_id'); ?>
		<?php echo $form->textField($model,'usergroups_user_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usergroups_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->