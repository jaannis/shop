<?php

// uses QueryBuilder function to from database using product id
$connect = new QueryBuilder($pdo);
$delete  = $delete->delete('lists', [
    'ID' => $_POST['id']
    ]);

header('Location: /');
