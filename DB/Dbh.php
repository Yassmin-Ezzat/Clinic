<?php

require_once("config.php");
class DBh{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	private $connection;
	private $result;
	public $sql;

	function __construct() {
		$this->servername = DB_SERVER;
		$this->username = DB_USER;
		$this->password = DB_PASS;
		$this->dbname = DB_DATABASE;
		$this->connect();
	}

	public function connect(){
		$this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->connection->connect_error) {
			die("Connection failed: " . $this->connection->connect_error);
		}
		return $this->connection;
	}

	public function getConn(){
		return $this->connection;
	}

	function query($sql){
		if (!empty($sql)){
			$this->sql = $sql;
			$this->result = $this->connection->query($sql);
			return $this->result;
		}
		else{
			return false;
		}
	}

	function fetchRow($result=""){
		if (empty($result)){ 
			$result = $this->result; 
		}
		return $result->fetch_assoc();
	}

	function __destruct(){
		$this->connection->close();
	}
}
?>