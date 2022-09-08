<?php

include('../database/db_connection.php');

$updateid=$_GET['id'];

$sql="select * from sale where SaleId='$updateid'";
$query=mysqli_query($con,$sql);
while($data=mysqli_fetch_array($query)){
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>

	<form method="POST" action="" name="form">
	<h1>Add Sales</h1>
		
		<div>	
			<label>Sale Date</label>
			<input type="date" name="saledate" value="<?php echo date('Y-m-d');?>" readonly/>
		</div>
		<div>
			<label>Customer Id</label>
			<select name="customerid">
				<option>Select Here</option>
				<?php
				include('../database/db_connection.php');

				$data=mysqli_query($con,"select * from Customer");
				$result=mysqli_num_rows($data);
				while($row=mysqli_fetch_array($data)){
					?>
				<option><?php echo $row['CustomerId'] .$row['CustomerName'];?></option>
					<?php
		
				}

				?>
			
			</select>
	
			</div>
		<div>
			<label>Product Id</label>
			<select name="productid">
			<option>Select Here</option>
				<?php
				include('../database/db_connection.php');

				$data=mysqli_query($con,"select * from Product");
				$result=mysqli_num_rows($data);
				while($row=mysqli_fetch_array($data)){
					?>
				<option><?php echo $row['ProductId'] . $row['ProductName'];?></option>
					<?php
		
				}?>
			</select>
		</div>
		<div>
			<lable>Quantity</label>
			<input type="number" id="qty" name="quantity" value="<?php echo $data['Quantity'];  ?>" >
		</div>
		<div> 
			<label>Unit Price</label>
			<input type="number" name="unitprice" id="uprice" value="<?php echo $data['UnitPrice']; ?>" onchange="myFun()" >
		</div>
		<div>
			<label>Total Price</label>
			<input type="number"name="totalprice" id="totalprice">
		</div>

				 
		<input type="submit" name="submit" value="add sale" >
		<p id="para"></p>
	
		</form>
		
	</body>
	</html>

<?php
			}
			?>