<?php


require 'functions.php';

//get list from database to show in product page
$lists = selectAll($pdo, 'lists');


   
require 'product.php';