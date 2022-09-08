<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div class="box2">
<div class="myTable">

<!-- box 2 open -->
<!-- getpurchase data -->
<h1>Display Table</h1>
<div id="data">
<form method="POST" action="" border=1>
	<input type="submit" name="submit" value="Show Purchase">
<table>
		<thead>
			<tr>
			<th>Purchase Id</th>
			<th>Purchase Date</th>
			<th>Supplier Id</th>
			<th>Product Id</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total Price</th>
			<th colspan="2">Manage</th>
			<tr>
		</thead>
	<?php

	include('../database/db_connection.php');
	if(isset($_POST['submit'])){
	$sql="select * from Purchase";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){
		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['PurchaseId']; ?></td>
				<td> <?php echo $data['PurchaseDate']; ?></td>
				<td> <?php echo $data['SupplierId']; ?></td>
				<td> <?php echo $data['ProductId']; ?></td>
				<td> <?php echo $data['Quantity']; ?></td>
				<td> <?php echo $data['UnitPrice']; ?></td>
				<td> <?php echo $data['TotalPrice']; ?></td>
				<td><a href="purchaseupdate.php?id=<?php echo $data['PurchaseId'];?>">Edit</a></td>
				<td><a href="#">Delete</a></td>


				<tr>
		</tbody>

		<?php
	}
}
	



?>

	</table>

</form>
</div>
	</div>
	</div>
	<!-- closing box2 -->

<!-- getpurchase data -->

<script>
	$myvalue=document.getElementById('')
</script>
</body>
</html>