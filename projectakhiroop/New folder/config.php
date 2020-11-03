<?php

$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

// Create connection
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Checking connection
//if (!$mysqli){
//	die("Connection Failed :".mysqli_connect_error());
//}
//echo "Connection Successful";
?>