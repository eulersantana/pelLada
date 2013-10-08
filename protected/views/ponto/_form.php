<?php
/* @var $this PontoController */
/* @var $model Ponto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ponto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usergroups_user_id'); ?>
		<?php echo $form->textField($model,'usergroups_user_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usergroups_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pontuacao'); ?>
		<?php echo $form->textField($model,'pontuacao'); ?>
		<?php echo $form->error($model,'pontuacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escore'); ?>
		<?php echo $form->textField($model,'escore'); ?>
		<?php echo $form->error($model,'escore'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->