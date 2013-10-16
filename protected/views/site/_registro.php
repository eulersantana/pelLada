<div class="registro container_12">
    <div class="p1">
        
        <div class="left side-left desktop-img">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/festas.jpg"," ",array()); ?>
        </div>
        <div class="right side-right mobile">
            <?php if(Yii::app()->user->hasFlash('erro')): ?>
            <div class=" bg-bar">
                <div class="page-bar">
                    <h1 class="title-page"><?php echo Yii::app()->user->getFlash('erro'); ?></h1>
                    <div class="clear"></div>
                </div>
            </div>
            <?php else: ?>
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
                        <div class="left">
                            <?php echo CHtml::submitButton('Cadastrar-se'); ?>
                        </div>
                        <div class="right">
                            <?php echo CHtml::link('Já sou cadastrado',Yii::app()->baseUrl.'/userGroups',array("class"=>"input")); ?>
                        </div>
                    </div>
            <?php $this->endWidget(); ?>
            </div><!-- form -->
        </div>
        <?php endif; ?>
    </div>
</div>
<style>
    #yw0{
        padding-right: 10px;
    }
</style>