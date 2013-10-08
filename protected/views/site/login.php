<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);


?>


<!-- <h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p> -->

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p>
 -->
	<div class="loginpanel">
            <div class="txt">
            	<?php echo $form->textField($model,'username',$array = array('placeholder' =>"Username")); ?>
				<?php echo $form->labelEx($model,'',$array = array('class' =>"entypo-user")); ?>				
				<?php echo $form->error($model,'username'); ?>
			</div>
	

			<div class="txt">
				<?php echo $form->passwordField($model,'password',$array = array('placeholder' =>"Senha")); ?>
				<?php echo $form->labelEx($model,'',$array = array('class' =>"entypo-lock")); ?>				
				<?php echo $form->error($model,'password'); ?>
				<!-- <p class="hint">
					Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
				</p> -->
			</div>

			<!-- <div class="txt">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div> -->

			<div class="buttons">
				<?php echo CHtml::submitButton('Login'); ?>
				<span>
                    <a href="javascript:void(0)" class="entypo-user-add register">Register</a>
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
                <a href="javascript:void(0)" class="googleplus"></a>
            </div>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
