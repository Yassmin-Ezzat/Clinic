<?php
session_start();
require_once("../DB/Dbh.php");
abstract class Model{
    protected $db;
    protected $connection;

    public function connect(){
        if(null === $this->connection ){
            $this->db = new Dbh();
        }
        return $this->db;
    }
}
?>