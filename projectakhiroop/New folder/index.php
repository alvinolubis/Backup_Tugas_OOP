<?php
// membuat koneksi database dengan file config
include_once("config.php");

//mengambil semua data pada database
$result = mysqli_query($mysqli, "SELECT * FROM service ORDER BY order_id DESC");
?>

<html>
<head>
	<title>Service Laptop Bogor</title>
</head>

<body>
	<a href="add.php">Add New Order</a><br/><br/>

		<table width='80%' border=1>

		<tr>
			<th>Customer</th> <th>Contact</th> <th>Date of Order</th> <th>Type of Service</th> <th>Action</th> <th>Cost</th>
		</tr>
		<?php
		while($service_data = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo"<td>".$service_data['customer']."</td>";
			echo"<td>".$service_data['contact']."</td>";
			echo"<td>".$service_data['date_of_order']."</td>";
			echo"<td>".$service_data['type_of_service']."</td>";
			echo"<td>".$service_data['action']."</td>";
			echo"<td>".$service_data['cost']."</td>";
			echo"<td><a href='edit.php?id=$service_data[order_id]'>Edit</a> | <a href='delete.php?id=$service_data[order_id]'>Delete</a></td></tr>";
		}
		?>
	</table>
</body>
</html>