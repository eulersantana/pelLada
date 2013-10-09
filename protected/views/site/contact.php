<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacte-nos';
?>
<div class="bgb container_12 p1">
    <h1>Contato</h1>

    <?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

    <?php else: ?>

    <p>
    
    </p>

    <div class="leave-a-comment">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'contato-form',
            'htmlOptions'=>array('class'=>'comment-form comment-form-contact'),
            'enableClientValidation'=>true,
            'clientOptions'=>array(
            'validateOnSubmit'=>true,
            ),
    )); ?>

            <p class="comentario">Os campos com <span class="required">*</span> são obrigatórios.</p>

            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                <p><?php echo $form->labelEx($model,'name'); ?></p>
                <?php echo $form->textField($model,'name'); ?>
                <?php echo $form->error($model,'name'); ?>
            </div>

            <div class="row">
                <p><?php echo $form->labelEx($model,'email'); ?></p>
                <?php echo $form->textField($model,'email'); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>

            <div class="row">
                <p><?php echo $form->labelEx($model,'subject'); ?></p>
                <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
                <?php echo $form->error($model,'subject'); ?>
            </div>

            <div class="row">
                <p><?php echo $form->labelEx($model,'body'); ?></p>
                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'body'); ?>
            </div>

            <?php if(CCaptcha::checkRequirements()): ?>
            <div class="row">
                <p><?php echo $form->labelEx($model,'verifyCode'); ?></p>
                <div>
                <p><?php $this->widget('CCaptcha'); ?></p>
                <?php echo $form->textField($model,'verifyCode'); ?>
                </div>
                <div class="hint">Por favor entre com as letras que são mostradas na imagem.
                <br/>Não há diferenciação entre letras maiúsculas e minusculas case-sensitive.</div>
                <?php echo $form->error($model,'verifyCode'); ?>
            </div>
            <?php endif; ?>

            <div class="row buttons">
                <?php echo CHtml::submitButton('Submit'); ?>
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