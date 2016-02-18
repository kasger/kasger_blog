<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'WNieFgtvvyPRQFqf9TdV8qRmcLcYm76g',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    
    //模块管理
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\AdminModule'   
        ],
    ],

    //'defaultRoute' => 'index',
    'params' => $params,
    
    /*映射控制器*/
    'controllerMap' => [
       // 'post' => "app\controllers\admin\IndexController"
    ],

    /*维护模式使用所有请求转发到指定的控制器中*/
    /*
    'catchAll' => [
         'test/index',
         'param1' => '*',
         'param2' => '*'
    ],
    */

    //别名设置
    'aliases' => [
        '@adminroot' => 'web/adminassets/',
        '@admin' => 'http://'.$_SERVER['HTTP_HOST'].'/web/adminassets/'
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
