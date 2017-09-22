<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
);
use wokster\article\Article;
return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
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
        ],
        'seo'=>[
          'class'=>'wokster\seomodule\Seo',
        ],
        'article'=>[
            'class'=>'wokster\article\Article',
            'status_list' => ['off','on'],
            'type_list' => [
                Article::TYPE_PAGE => 'страница',
                Article::TYPE_NEWS => 'новость',
                Article::TYPE_SALE => 'акция'
            ]
        ],
        'menu'=>[
            'class'=>'wokster\menu\Menu',
        ],
        'tags'=>[
            'class'=>'wokster\tags\Tags',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'frontUrlManager' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => 'http://setDominInBackendConfig',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/../../frontend/config/routes.php'),
        ],
    ],
    'params' => $params,
];
