<?php

require 'core/QueryBuilder.php';

//get list from database to show in product page
$database = new QueryBuilder($pdo);
$lists = $database->selectAll('lists');

require 'views/product.php';
