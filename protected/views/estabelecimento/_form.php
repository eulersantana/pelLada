<?php
/* @var $this EstabelecimentoController */
/* @var $model Estabelecimento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estabelecimento-form',
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
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proprietario'); ?>
		<?php echo $form->textField($model,'proprietario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'proprietario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->