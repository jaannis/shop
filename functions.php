<?php

// $config = require 'config.php';

//connect to database
function connectToDatabase()
{
    try{
    return new PDO('mysql:host=127.0.0.1:3306;dbname=shopping', 'root', 'parole');
        }catch (PDOException $e){
            die($e->getMessage());
        }
}
// {
//     try{        
//     return new PDO(
//         $config['connection'], ';dbname=', $config['name'],
//         $config['username'],
//         $config['password'],
//         $config['options']
//     );
//         }catch (PDOException $e){
//             die($e->getMessage());
//         }
// }



//function to get data from database
function selectAll($pdo, $table)
{
    $statement = $pdo->prepare("select * from {$table}");
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ);
}

//get data to database
function insert($pdo, $table, $parameters)
{
    try{
    
        $sql = "INSERT INTO $table SET sku = :sku, name = :name, price = :price, type = :type,
        size = :size,  height = :height, width = :width, length = :length,
        weight = :weight";
        $statement = $pdo->prepare($sql);
        $statement->execute($parameters); 
    } catch (Exception $e) {
        die($e->getMessage());
    } 
    var_dump($statement);
    var_dump($parameters);
    die;       
}

//delete data from database
function delete($pdo, $table, $parameters)
{   
   try{
        // foreach($parameters as $id){
            $sql = "DELETE FROM $table
            WHERE $parameters";
            $statement = $pdo->prepare($sql);
            $statement->execute(print_r($parameters));
        // }
    } catch (Exception $e) {
        die($e->getMessage());
    }
    var_dump($statement);
    var_dump($parameters);            
    var_dump($id);
        die;  

 }