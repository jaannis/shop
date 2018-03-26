<?php
require 'functions.php';

// use funtion delete to delete product from database using product id
delete($pdo, 'lists',[
    'ID' => $_POST['id']
    ]);


    
header('Location: /');