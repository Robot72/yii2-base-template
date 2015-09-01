<?php

return [    
    'components' =>[
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=DevYii2Modules',
            'username' => 'root',
            'password' => '',
        ],        
        'mailer' => [
            'useFileTransport' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],        
    ]
];
