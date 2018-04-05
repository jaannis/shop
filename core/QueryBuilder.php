<?php

class QueryBuilder
{
    protected $pdo;
    
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
        try {
            $sql = "INSERT INTO $table SET sku = :sku, name = :name, price = :price, type = :type,
            size = :size,  height = :height, width = :width, length = :length, weight = :weight";
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    //deletes files from database
    public function delete($table, $parameters)
    {
        foreach ($parameters as $array_id) {
            foreach ($array_id as $id) {
                try {
                    $sql = "DELETE FROM $table
                    WHERE ID = $id";
                    $statement = $this->pdo->prepare($sql);
                    $statement->execute($array_id);
                } catch (Exception $e) {
                    die($e->getMessage());
                }
            }
        }
    }
}
