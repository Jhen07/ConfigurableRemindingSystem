<?php
session_start();

class Connection{

	private $host = 'localhost';
	private $user = 'root';
	private $password = 'dbms';
	private $dbName = 'webapp2projec';

	public function __construct() {
		$conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);

		if ($conn->connect_error){
			die('Connection failed');
		}
		return $conn;
	}

}
require_once('User.php');
$user = new User;

?>