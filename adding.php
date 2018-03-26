<?php
require 'functions.php';

// take from function php function to insert into database

$insert = insert($pdo, 'lists',[

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
  
  
header('Location: add.php');