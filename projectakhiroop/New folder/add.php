<html>
<head>
	<title>Add Orders</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Customer</td>
				<td><input type="text" customer="customer"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" contact="contact"></td>
			</tr>
			<tr>
				<td>Date of Order</td>
				<td><input type="date" date_of_order="date_of_order"></td>
			</tr>
			<tr>
				<td>Type of Service</td>
				<td><input type="text" type_of_service="type_of_service"></td>
			</tr>
			<tr>
				<td>Action</td>
				<td><input type="text" action="action"></td>
			</tr>
			<tr>
				<td>Cost</td>
				<td><input type='text' cost="cost"></td>
			</tr>
			<tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
		</table>
	</form>

	<?php

	//check form submit status
	if(isset($_POST['Submit'])) {
		$customer = isset($_POST['customer']) ? $_POST['customer'] : '';
		$contact = isset($_POST['contact']) ? $_POST['contact'] : '';
		$date_of_order = isset($_POST['date_of_order']) ? $_POST['date_of_order'] : '';
		$type_of_service = isset($_POST['type_of_service']) ? $_POST['type_of_service'] : '';
		$action = isset($_POST['action']) ? $_POST['action'] : '';
		$cost = isset($_POST['cost']) ? $_POST['cost'] : '';

		//database connection file
		include_once("config.php");

		//insert service data into table
		$result = mysqli_query($mysqli, "INSERT INTO service(customer, contact, date_of_order, type_of_service, action, cost) VALUES('$customer', '$contact', '$date_of_order', '$type_of_service', '$action', '$cost')");

		//message when data added
		echo "Order added successfully. <a href='index.php'>View Orders</a>";
	}
	?>
</body>
</html> 