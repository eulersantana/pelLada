<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
        public $title_action = "Página Inicial";
        public $selecionado = "site";
                
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            $model_usergroups_user = new UserGroupsUser;
            $model_perfil = new Perfil;
            if(isset($_POST['UserGroupsUser']))
            {
                $model_usergroups_user->attributes = $_POST['UserGroupsUser'];
                $model_perfil->attributes = $_POST['Perfil'];
                $model_usergroups_user->status = 4;
                $model_usergroups_user->home = "/site";
                $grupo = UserGroupsGroup::model()->find("groupname = 'user'");
                $model_usergroups_user->group_id = $grupo->id;
                $model_usergroups_user->username = $model_usergroups_user->email;
                if($model_usergroups_user->save()){
                    $model_perfil->usergroups_user_id = $model_usergroups_user->id;
                    $model_perfil->save();
                    Yii::app()->user->setFlash("registro","Registro feito com sucesso.");
                    $this->redirect(Yii::app()->baseUrl."/userGroups");
                }
                else{
                    Yii::app()->user->setFlash("erro","Não foi possível fazer o registro.");
                }
            }
            $this->render('index',array('model_user'=>$model_usergroups_user,"model_perfil"=>$model_perfil));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
            $this->selecionado = "contato";
            $this->title_action = "Contato";
            $model=new ContactForm;
            if(isset($_POST['ContactForm']))
            {
                    $model->attributes=$_POST['ContactForm'];
                    if($model->validate())
                    {
                            $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
                            $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
                            $headers="From: $name <{$model->email}>\r\n".
                                    "Reply-To: {$model->email}\r\n".
                                    "MIME-Version: 1.0\r\n".
                                    "Content-Type: text/plain; charset=UTF-8";

                            mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
                            Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                            $this->refresh();
                    }
            }
            $this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
	}
        
        public function actionRegistro()
        {
            $model_usergroups_user = new UserGroupsUser;
            $model_perfil = new Perfil;
            if(isset($_POST['UserGroupsUser']))
            {
                $model_usergroups_user->attributes = $_POST['UserGroupsUser'];
                $model_perfil->attributes = $_POST['Perfil'];
                $model_usergroups_user->status = 4;
                $model_usergroups_user->home = "/site";
                $grupo = UserGroupsGroup::model()->find("groupname = 'user'");
                $model_usergroups_user->group_id = $grupo->id;
                $model_usergroups_user->username = $model_usergroups_user->email;
                if($model_usergroups_user->save()){
                    $model_perfil->usergroups_user_id = $model_usergroups_user->id;
                    $model_perfil->save();
                    Yii::app()->user->setFlash("registro","Registro feito com sucesso.");
                    $this->redirect(Yii::app()->baseUrl."/userGroups");
                }
                else{
                    Yii::app()->user->setFlash("erro","Não foi possível fazer o registro.");
                }
            }
            $this->render('registro',array('model_user'=>$model_usergroups_user,"model_perfil"=>$model_perfil));
        }
}