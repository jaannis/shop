<?php

require 'core/boot.php';
// var_dump($database);
// die;
// uses QueryBuilder function to from database using product id
$database->delete('lists',[
    'ID' => $_POST['id']
    ]);

header('Location: /');