<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'timeZone' => 'Asia/Jakarta',
    'name' => 'Starter APP',
    'id' => 'basic',
    'defaultRoute' => 'site/index',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

    'modules' => [
        'dashboard' => [
            'class' => 'app\modules\dashboard\Module',
        ],
        'blog' => [
            'class' => 'app\modules\blog\Module',
        ],
        'profile' => [
            'class' => 'app\modules\profile\Module',
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
            // 'layout' => 'left-menu', // it can be '@path/to/your/layout'.
            'layout' => 'right-menu', // it can be '@path/to/your/layout'.
            // 'controllerMap' => [
            //     'assignment' => [
            //         'class' => 'mdm\admin\controllers\AssignmentController',
            //         'userClassName' => 'mdm\admin\models\User',
            //         'userClassName' => 'app\models\User',
            //         'idField' => 'id'
            //     ],
            // ],
            // 'mainLayout' => '@app/views/layouts/mainMdmAdmin.php',
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['*'],
        ]
    ],

    'components' => [
        'session' => [
            'class' => 'yii\web\DbSession',
            'timeout' => 60*60*8,
            'cookieParams' => [
                'httpOnly' => true,
            ],
        ],

        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => []
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => []
                ],
            ],
        ],

        'view' => [
            // 'class' => 'yii\web\View',
            'theme' => [
                // 'class' => 'yii\base\Theme',
                'pathMap' => [
                    '@app' => [
                        '@app/themes/vuexy',
                    ],
                ],
                'baseUrl' => '@web/themes/vuexy',
                'basePath' => '@web/themes/vuexy'
            ]
        ],

        'authManager' => [
            'class' => 'yii\rbac\DBManager',
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'QJuLNE1J4jf0uf3ZnkB1o0kH7fFs0aeK',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'mdm\admin\models\User',
            // 'loginUrl' => ['admin/user/login'],
            // 'identityClass' => 'app\models\User',
            // 'enableAutoLogin' => true,
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // [
                //     'class' => '\defyma\helpers\EncryptUrl',
                //     'pattern' => '',
                //     'route' => 'site/index',
                //     'skey' => 'myJ0u12n3y'
                // ],
            ],
        ],
        
    ],

    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            // 'debug/*',
            // 'admin/*'
        ]
    ],

    'params' => $params,
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
        'allowedIPs' => ['127.0.0.1', '::1', ],
    ];
}

return $config;
