<?php

class QueryBuilder 
{
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
  //gets everything from database
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    //inserts data to database
    public function insert($table, $parameters)
    {
        try{
        
            $sql = "INSERT INTO $table SET sku = :sku, name = :name, price = :price, type = :type,
            size = :size,  height = :height, width = :width, length = :length,
            weight = :weight";
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters); 
        } catch (Exception $e) {
            die($e->getMessage());
        }        
    }
    //deletes files from database
    public function delete($table, $parameters)
    {
        var_dump($parameters);
        try{
            foreach($parameters as $id){
                $sql = "DELETE FROM $table
                WHERE $parameters";
                $statement = $this->pdo->prepare($sql);
                $statement->execute($parameters);
            }
        }catch (Exception $e) {
                 die($e->getMessage());
        }   
        var_dump($statement);
        
        var_dump($id);        
        die;     
    }
}