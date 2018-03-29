<?php

//get list from database to show in product page
$lists = $database->selectAll('lists');

require 'views/product.php';