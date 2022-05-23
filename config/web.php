<?php

use app\components\LangRequest;
use app\components\LangUrlManager;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'name' => 'CIL',
    'language' => 'ru-RU',
    'id' => 'basic',
    'timeZone' => 'Europe/Moscow',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'app' => 'app.php',
                    ],
                ],
            ],
        ],
        'formatter' => [
            'locale' => 'ru-RU',
            'defaultTimeZone' => 'Europe/Moscow',
        ],
        'request' => [
            'class' => LangRequest::class,
            'cookieValidationKey' => 'QsGnRsbfs-79keyjpM8G31uBFDknyqOO',
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
            'viewPath' => '@app/mail',
            'htmlLayout' => 'layouts/mail-html',
            'textLayout' => 'layouts/mail-text',
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => ['info@onyxgrp.ru' => 'onyxgrp.ru'],
            ],
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.hostland.ru',
                'username' => 'noreplay@onyxgrp.ru',
                'password' => 'rbkmzyjdFC1900',
                'port' => '25',
                'encryption' => '',
            ]
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
            'class' => LangUrlManager::class,
            'rules' => [
                'order' => 'site/order',
                'order-service' => 'site/order-service',
                'services' => 'site/services',
                'cookie' => 'site/cookie',
                'privacy' => 'site/privacy',
                'steps' => 'site/steps',
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap5\BootstrapAsset' => [
                    'js' => ['js/bootstrap.js'],
                ],
            ],
        ],
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
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
