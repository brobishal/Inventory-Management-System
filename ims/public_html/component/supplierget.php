<?php
session_start();
if(!isset($_SESSION['adminid'])){
 header('location:../adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Document</title>
</head>
<body>

	<h1>Supplier Details</h1>
	<table border="1"cellpaading="2" cellspacing="2">
		<thead>
			<th>Supplier Id</th>
			<th>Supplier Name</th>
			<th>Email</th>
			<th>Status</th>
		</thead>
	<?php

	include('../database/db_connection.php');
	$sql="select * from Supplier";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){
		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['SupplierId']; ?></td>
				<td> <?php echo $data['SupplierName']; ?></td>
				<td> <?php echo $data['Email']; ?></td>
				<td> <?php echo $data['Status']; ?></td>
				<tr>
		</tbody>

		<?php
	}
	



?>

	</table>

	
	
</body>
</html>


