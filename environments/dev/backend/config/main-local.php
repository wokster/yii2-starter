<?php

$config = [
    'bootstrap' => ['log','debug','gii'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
        'debug' => [
            'class' => 'yii\debug\Module'
        ],
        'settings'=>[
            'class'=>'wokster\settings\Settings',
            'imageUrl' => 'http://clear.local/upload/settings/images/'
        ],
        'seo'=>[
            'class'=>'wokster\seomodule\Seo',
        ],
        'article'=>[
            'class'=>'wokster\pages\Article',
        ],
        'menu'=>[
            'class'=>'wokster\menu\Menu',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
    ],
];

if (!YII_ENV_TEST) {
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
