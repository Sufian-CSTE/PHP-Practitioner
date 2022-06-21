<?php


return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'name' => 'practitioner',
        'username' => 'root',
        'password' => '',
        'option' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
    ]
];