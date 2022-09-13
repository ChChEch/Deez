<?php
class DB {
    private $conn;

    public function __construct(){
        try {
            $this->conn = new POD('sqlite:database:sqlite');
            $this->conn->setAttribute(\POD::ATTR_ERRMODE, \POD::ERRMODE_EXCEPTION);
        } catch (Exception $e){
            var_dump($e);
        }

    }
    public function all($table){
        $stmt = $conn->prepare('SELECT * FROM ' . $table . ';');
        $stmt->execute();
        $stmt->setFetchMode(\POD::FETCH_CLASS, \App\Models\Post__class);
        return $stmt->fetchAll();
    }
}