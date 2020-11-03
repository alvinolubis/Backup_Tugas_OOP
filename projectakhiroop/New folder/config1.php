<?php
class database{
	var $databaseHost = 'localhost';
	var $databaseName = 'oop_project';
	var $databaseUsername = 'admin';
	var $databasePassword = 'kelompok11';

	function __construct(){
		$connect = mysqli_connect($this->databaseHost, $this->databaseUsername, $this->databasePassword, $this->databaseName);

		if($connect){
			echo "Connection Successful";
		}
		else{
			echo "Connection Failed";
		}
	}
}
$connect = new database();
?>