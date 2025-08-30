<?php
class Genre{

    private $connection;
    private $table = "tb_genre";

    public $id;
    public $nama;

    public function __construct($db){
        $this->connection = $db;
    }

    public function read(){
        try {
        $query = "SELECT * FROM ".$this->table;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt;
        }
        catch(\Exception $e){
            echo $e->getMessage();
        }
    }



}
