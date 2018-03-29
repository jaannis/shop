<?php

$config = [
    'connection' => 'mysql:host=127.0.0.1:3306',
    'name' => 'shopping',
    'username' => 'root',
    'password' => 'parole',        
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
    ];