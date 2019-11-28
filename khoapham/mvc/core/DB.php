<?php
class DB{
	public $conn;
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "mvc";

	function __construct(){
		$this->conn = mysqli_connect($this->servername, $this->username, $this->password);
		mysqli_select_db($this->conn, $this->dbname);
		//$tieng_viet = "SET NAMES 'utf8'";
		mysqli_query($this->conn, "SET NAMES 'utf8'");
	}
}
?>