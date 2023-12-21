<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/hail812/yii2-adminlte3/src/views'
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'n5c356VpP7C5XJPqnejOQRXTjV3r4_IT',
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
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
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
        'db' => $db,
        'cart' => [
            'class' => 'yz\shoppingcart\ShoppingCart',
            'cartId' => 'my_application_cart',
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => ['admin', 'user'],
            //            'itemFile' => '@app/rbac/items.php',
//            'assignmentFile' => '@app/rbac/assignments.php',
//            'ruleFile' => '@app/rbac/UserGroupRule.php',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
    'as globalAccess' => [
        'class' => 'yii\filters\AccessControl',
        'rules' => [
            [
                'actions' => ['error'],
                'allow' => true,
                'roles' => ["?", "@"],
            ],
            [
                'allow' => true,
                'controllers' => ['site'],
                'actions' => ['login', 'logout', 'home', 'categories', 'category-details'],
                'roles' => ['?', '@'],
            ],
            [
                'allow' => true,
                'controllers' => ['site'],
                'actions' => ['about', 'index'],
                'roles' => ['?'],
            ],
            [
                'allow' => true,
                'controllers' => ['products'],
                'roles' => ['?', '@'],
            ],
            [
                'allow' => true,
                'controllers' => ['user'],
                'roles' => ['?', '@'],
            ],
            [
                'allow' => true,
                'roles' => ['?', '@'],
            ],
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
