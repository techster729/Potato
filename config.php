<?php

return [
    'database' => [
        'name' => 'cphp',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
        ]
    ]
    ];