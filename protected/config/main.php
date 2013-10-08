<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'PelLada',
	'sourceLanguage'=>'pt_br',
	'language' => 'pt_br',
	'defaultController'=>'site',
	'theme' => 'clubix',
	
	// preloading 'log' component
	'preload'=>array('log','kint'),

	// autoloading model and component classes
	'import'=>array(
            'application.models.*',
            'application.components.*',
            'application.modules.userGroups.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'userGroups'=>array(
                    'accessCode'=>'@!pellada',
                    'salt'=>'',
                ),
            
		'gii'=>array(
                    'class'=>'system.gii.GiiModule',
                    'password'=>'@!pellada',
                    // If removed, Gii defaults to localhost only. Edit carefully to taste.
                    'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
                    // enable cookie-based authentication
                    'allowAutoLogin'=>true,
                    'class'=>'userGroups.components.WebUserGroups',
		),
              
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		// 'db'=>array(
		// 	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// ),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
                    'connectionString' => 'mysql:host=localhost;dbname=pelLada',
                    'emulatePrepare' => true,
                    'username' => 'root',
                    'password' => '123',
                    'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
                'kint' => array(
                    'class' => 'ext.Kint.Kint',
                ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'euler-m.d@hotmail.com',
	),
);
