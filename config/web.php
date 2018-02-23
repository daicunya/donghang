<?php$params = require(__DIR__ . '/params.php');Yii::$classMap['Method'] = '@app/libs/Method.php';Yii::$classMap['UploadFile'] = '@app/libs/upload/UploadFile.php';$config = [    'id' => 'basic',    'basePath' => dirname(__DIR__),    'bootstrap' => ['log'],    'modules' => [        'cn' => [            'class' => 'app\modules\cn\CnModule'        ],        'admin' => [            'class' => 'app\modules\admin\AdminModule'        ],    ],    'components' => [        'request' => [            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation            'cookieValidationKey' => '3ggkbEhqR-n2ASj19BJSpbdvpmbO4NwK',        ],//        'cache' => [//            'class' => 'yii\caching\MemCache',//            'servers'=> [['host'=>'127.0.0.1','port'=>'11211']]//        ],        'errorHandler' => [            'errorAction' => 'site/error',        ],        'urlManager' => [            'enablePrettyUrl' => true,            'showScriptName' => false,            //'suffix' => '.html',            'rules' => [//                  // 首页                '' => 'cn/index/index',// 首页                'details/<id:\d+>.html' => 'cn/index/details',// 课程详情页                'aboutUs.html' => 'cn/about/about',// 课程详情页            ],        ],        'log' => [            'traceLevel' => YII_DEBUG ? 3 : 0,            'targets' => [                [                    'class' => 'yii\log\FileTarget',                    'levels' => ['error', 'warning'],                ],            ],        ],        'db' => require(__DIR__ . '/db.php'),    ],    'params' => $params,];if (YII_ENV_DEV) {    // configuration adjustments for 'dev' environment    $config['bootstrap'][] = 'debug';    $config['modules']['debug'] = 'yii\debug\Module';    $config['bootstrap'][] = 'gii';    $config['modules']['gii'] = 'yii\gii\Module';}return $config;