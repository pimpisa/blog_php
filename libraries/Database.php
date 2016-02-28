<?php
class Database {
	public $host = DB_HOST;
	public $username = DB_USER;
	public $password = DB_PASS ;
	public $db_name= DB_NAME;

	public $link;
	public $error;

	/*
	*Class Constructor
	*/
	public function __construct(){		
		//Call connect call another function on another class
		$this->connect();

	}

	/*
	*Connector
	*/
	private function connect(){
		$this->link = new mysqli($this->host,$this->username,$this->password,$this->db_name);

		if(!$this->link){
			$this->error = "COonection Failed:". $this->link->connect_error;
			return false;
		}
	}

}

?>
