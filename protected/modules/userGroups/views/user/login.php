<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',        
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        'htmlOptions'=>array('class'=>'login')
)); ?>
    <div class="loginpanel">
        <?php if(Yii::app()->user->hasFlash('registro')): ?>
        <div class="bg-bar">
            <div class="page-bar">
                <h1 class="title-page"><?php echo Yii::app()->user->getFlash('registro'); ?></h1>
                <div class="clear"></div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="txt">                
            <?php echo $form->textField($model,'username', array('class'=>'text validate[required]','placeholder' =>"Username")); ?>
            <label for="username" class="entypo-user"></label>
        </div>
        <div class="txt">
            <?php echo $form->passwordField($model,'password', array('class'=>'password validate[required]','placeholder' =>"Senha")); ?>
            <label for="password" class="entypo-lock"></label>
        </div>
        <div class="buttons">
             <?php echo CHtml::submitButton('Logar'); ?>
             <span>
                <?php echo CHtml::link("Registre-se", Yii::app()->baseUrl."/site/registro", array("class"=>"entypo-user-add register")); ?>
             </span>
        </div>
        <div class="hr">
            <div></div>
            <div>OU</div>
            <div></div>
        </div>

        <div class="social">
            <a href="javascript:void(0)" class="facebook"></a>
            <a href="javascript:void(0)" class="twitter"></a>
        </div>
    </div>
<?php $this->endWidget(); ?>

<?php if(Yii::app()->user->hasFlash('login')): ?>
    
    <div class="alert error">
        <strong>ERRO: </strong><?php echo Yii::app()->user->getFlash('login'); ?>
    </div>

<?php endif; ?>