<?php

require 'config.php';

//connects to database
try {
    $pdo = new PDO(
        $config['connection']. ';dbname='. $config['name'],
        $config['username'],
        $config['password'],
        $config['options']
        );
} catch (PDOException $e) {
    die($e->getMessage());
}

