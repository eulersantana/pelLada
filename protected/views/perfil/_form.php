<?php
/* @var $this PerfilController */
/* @var $model Perfil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perfil-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rg'); ?>
		<?php echo $form->textField($model,'rg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'rg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nascimento'); ?>
		<?php echo $form->textField($model,'nascimento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usergroups_user_id'); ?>
		<?php echo $form->textField($model,'usergroups_user_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usergroups_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagem'); ?>
		<?php echo $form->textField($model,'imagem',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->