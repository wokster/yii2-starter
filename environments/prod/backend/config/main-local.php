<?php
return [
    'bootstrap' => ['log'],
    'modules' => [
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
