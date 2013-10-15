<?php
$this->pageTitle=Yii::app()->name . ' - Registro';
?>
<div class="bgb container_12 p1">
    <h1>Registro</h1>

    <?php if(Yii::app()->user->hasFlash('registro')): ?>
    <div class=" bg-page-bar">
        <div class="page-bar">
            <h1 class="title-page"><?php echo Yii::app()->user->getFlash('registro'); ?></h1>
            <div class="clear"></div>
        </div>
    </div>
    <?php else: ?>

    <p>
    
    </p>

    <div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'registro-form',
            'htmlOptions'=>array('class'=>'formulario'),
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
    )); ?>

            <p class="comentario">Os campos com <span class="required">*</span> são obrigatórios.</p>

            <?php echo $form->errorSummary($model_user); ?>

            <div class="row">
                <p><?php echo $form->labelEx($model_perfil,'nome'); ?></p>
                <?php echo $form->textField($model_perfil,'nome'); ?>
                <?php echo $form->error($model_perfil,'nome'); ?>
            </div>

            <div class="row">
                <p><?php echo $form->labelEx($model_user,'email'); ?></p>
                <?php echo $form->textField($model_user,'email'); ?>
                <?php echo $form->error($model_user,'email'); ?>
            </div>

            <div class="row">
                <p><?php echo $form->labelEx($model_user,'password'); ?></p>
                <?php echo $form->passwordField($model_user,'password'); ?>
                <?php echo $form->error($model_user,'password'); ?>
            </div>
            
            <div class="row buttons">
                <?php echo CHtml::submitButton('Cadastrar-se'); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div><!-- form -->

    <?php endif; ?>
</div>
<style>
    #yw0{
        padding-right: 10px;
    }
</style>