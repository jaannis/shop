<?php

require 'core/QueryBuilder.php';

// uses QueryBuilder function to insert into database
$database->insert('lists',[
    'sku' => $_POST['sku'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'type' =>$_POST['type'],
    'size' =>$_POST['size'],
    'height' =>$_POST['height'],
    'width' =>$_POST['width'],
    'length' =>$_POST['length'],
    'weight' =>$_POST['weight']    
    ]);
    
header('Location: views/add.php');