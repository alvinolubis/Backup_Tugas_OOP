<?php
//include database connection file
include_once("config.php");

//Check if form is submitted
if(isset($_POST['update']))
{
	$order_id = $_POST['order_id'];

	$customer = $_POST['customer'];
	$contact = $_POST['contact'];
	$date_of_order = $_POST['date_of_order'];
	$type_of_service = $_POST['type_of_service'];
	$action = $_POST['action'];
	$cost = $_POST['cost'];

	//update service data
	$result = mysqli_query($mysqli, "UPDATE service SET customer = '$customer', contact = '$contact', dateoforder = '$date_of_order', typeofservice = 'type_of_service', action = '$action', cost = '$cost' WHERE orderid=$order_id");

	//redirecting to homepage
	header('Location: index.php');
}
?>
<?php
//show selected service data (from order_id)

//fetching order id
$orderid = $_GET['order_id'];

//fetch data from order id
$result = mysqli_query($mysqli, "SELECT * FROM service WHERE order_id=$orderid");

while($service_data = mysqli_fetch_array($result))
{
	$customer = $service_data['customer'];
	$contact = $service_data['contact'];
	$date_of_order = $service_data['date_of_order'];
	$type_of_service = $service_data['type_of_service'];
	$action = $service_data['action'];
	$cost = $service_data['cost'];
}
?>
<html>
<head>
	<title>Edit Service Log</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_log" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Customer</td>
				<td><input type="text" name="customer" value=<?php echo $customer;?>></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="number" name="contact" value=<?php echo $contact;?>></td>
			</tr>
			<tr>
				<td>Date of Order</td>
				<td><input type="date" name="date_of_order" value=<?php echo $date_of_order;?>></td>
			</tr>
			<tr>
				<td>Type of Service</td>
				<td><input type="text" name="type_of_service" value=<?php echo $type_of_service;?>></td>
			</tr>
			<tr>
				<td>Action</td>
				<td><input type="text" name="action" value=<?php echo $action;?>></td>
			</tr>
			<tr>
				<td>Cost</td>
				<td><input type="number" name="cost" value=<?php echo $cost;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="order_id" value=<?php echo $_GET['order_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>