<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
        'name' => 'newproj',
	'sourceLanguage' => 'ru',
        'language' => 'ru',
        //'defaultController' => 'site/index',
        'preload' => array('log', 'languageManager'),
	// preloading 'log' component
	//'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(  
			'class'=>'system.gii.GiiModule',
			'password'=>'poiuytrewq',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=> false//array('127.0.0.1','::1'),
		),

		
	),

	// application components
	'components'=>array(
		
		// uncomment the following to enable URLs in path-format
		
                /*
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
                'languageManager' => array(
                    'class' => 'DbLanguageManager',
                ),
                'urlManager'=>array(
                        'urlFormat'=>'path',
                        'showScriptName'=>false,
                        'rules'=>array(
                            '/' => 'site/index',
                            //'<action:(contact|login|logout)>/*' => 'site/<action>',
                            '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                            '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                            '<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
                            //'<controller>/<action>'=>'<controller>/<action>',
                        ),
                ),
                'request' => array(
                    'class' => 'HttpRequest',
                    'enableCsrfValidation' => false,
                    'enableCookieValidation' => true,
                    'noCsrfValidationRoutes' => array('admin/item'),
                ),
            
		'db'=>require('db.php'),
                'authManager'=>array(
                    'class'=>'CDbAuthManager',
                    'defaultRoles' => array('guest'),
                ),
                'user' => array(
                    'allowAutoLogin' => true,
                    'class' => 'WebUser',
                    'identityClass' => 'User',
                ),
                'mail' => array(
                    'class' => 'ext.yii-mail.YiiMail',
                    'transportType' => 'php',
                    'viewPath' => 'application.views.mail',
                    'logging' => false,
                    'dryRun' => false
                ),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
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
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
            'adminEmail'=>'webmaster@example.com',
            'loginDuration' => 3600 * 24 * 30,
            'defaultPageSize' => 50,
	),
);