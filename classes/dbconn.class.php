<?php

class DbConnect{

	/* define variables for DbConn */

	private $hostname;
	private $username;
	private $password;
	private $databasename;

	public $connect;
	private $selectDB;

	public function __construct(){
		$this->hostname = "127.0.0.1";
		$this->username = "root";
		$this->password = "";
		$this->databasename = "dbsample";
	}

	public function openConnection(){
		$this->connect = 
		mysqli_connect($this->hostname, $this->username, $this->password, 
			$this->databasename);

		if(!$this->connect):
			echo '<div 
			id="dbmess">Connection problem.</div>';
		else:
			$this->selectDB();
		endif;

	}

	public function selectDB(){
		$this->selectDB =
			mysqli_select_db($this->connect, $this->databasename);

		if(!$this->selectDB):
			echo '<div id="dbmess"> The database is not present. </div';
		endif;
	}

	public function closeConnection(){
		mysqli_close($this->connect);
	}


}


?>