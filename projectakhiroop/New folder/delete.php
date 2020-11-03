<?php
//include database connection file
include_once("config.php");

//get order id from url to delete data
$orderid = $_GET['order_id'];

//deleting data row from table based from order id
$result = mysqli_query($mysqli, "DELETE FROM service WHERE orderid=$order_id");

//redirecting to home
header('Location:index.php');
?>