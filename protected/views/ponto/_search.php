<?php
/* @var $this PontoController */
/* @var $model Ponto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pessoa_id'); ?>
		<?php echo $form->textField($model,'pessoa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pontuacao'); ?>
		<?php echo $form->textField($model,'pontuacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escore'); ?>
		<?php echo $form->textField($model,'escore'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->