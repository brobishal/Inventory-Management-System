<?php

include('../database/db_connection.php');
$updateid=$_GET['id'];


$sql="select * from purchase where PurchaseId='$updateid'";
$query=mysqli_query($con,$sql);
while($value=mysqli_fetch_array($query)){


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

	<title>Document</title>
	
	<style >
		*{
			margin:0px;
			padding:0px;
			box-sizing:border-box;
		}
		.main{
			width:80vw;
			background-color:#f1f1f1;

	
		}

		.box1{
			margin:90px 50px;
			background:#ddd;
			width:600px;
			padding:20px;
			border-radius:5px;


		}

		.box1 .myForm input[type="date"],
		select,
		.box1 .myForm input[type="number"]{			
			width:100%;
			height:30px;
			width:100%;
			border-radius:5px;
			border:1px solid #ccc;
			margin:5px;
			padding:5px;
		}
		.box1 .myForm input[type="submit"]{
			height:30px;
			width:100%;
			border-radius:5px;
			border:1px solid #ccc;
			margin:5px;
			padding:5px;
			background:#03a9f4;
		}

		.box1 .myForm h1{
			font-size:30px;
			padding:10px;

		}


		.box2{
		padding:20px;
		margin:40px 0px;
			
		}
		.box2 .myTable h1{
			font-size:30x;
			text-align:center;
			color:#003147;
			padding-bottom:20px;



		}
		table {
			border-collapse:collapse;
			width:100%;
		}
		.box2 .myTable table thead tr th{
			background:#ddd;
			text-align:center;


		}
		.box2 .myTable table tbody tr td{
			text-align:center;
			padding:10px;
			border-bottom:1px solid #ddd;
		}
		.box2 .myTable table tbody tr td:nth-child(8){
			border-left:1px solid #ddd;
			border-bottom:none;
			background:#03a9f4;
			

		}
		.box2 .myTable table tbody tr td:nth-child(9){
		border-bottom:none;
		background:#03a9f4;
		opacity:80%;
		}
		
		.box2 .myTable table tbody tr td a{
			color:#fff;
		}


		


	

	</style>

	
</head>
<body>
<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>


<!-- main contaeiner open -->
<div class="main">

<!-- box 1 open -->
<div class="box1">
<div class="myForm">
<form method="POST" action="" name="form">
	<h1>Update Purchase</h1>
			<label>Purchase Date</label>
			<input type="date" id="date" name="purchasedate" value="<?php echo $value['PurchaseDate']; ?>">
			<br/>
			<label>Supplier Id</label>
			<select name="supplierid">
				<option><?php echo $value['SupplierId']; ?></option>
				<?php
				include('../database/db_connection.php');

				$data=mysqli_query($con,"select * from Supplier");
				$result=mysqli_num_rows($data);
				while($row=mysqli_fetch_array($data)){
					?>
				<option><?php echo $row['SupplierId'] .$row['SupplierName'];?></option>
					<?php
		
				}

				?>
			
			</select>
			<br/>
			<label>Product Id</label>
			<select name="productid">
			<option><?php echo $value['ProductId']; ?></option>
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
			<br/>
	
			<lable>Quantity</label>
			<input type="number" id="qty" name="quantity" value="<?php echo $value['Quantity']; ?>" required/>
			<br/>
			<label>Unit Price</label>
			<input type="number" name="unitprice" id="uprice" value="<?php echo $value['UnitPrice']; ?>" 
			onchange="myFun()" required/>
			<br/>
			<label>Total Price</label>
			<input type="number" name="totalprice" id="totalprice" value="<?php echo $value['TotalPrice']; ?>" required/>
			<p id="tcost"></p>
				 
		<input type="submit" name="submit" value="Update" >
		<p id="para" style="color:red;"></p>
	
</form>
</div>
</div>

<!-- box 1 close -->

<!-- getpurchase data -->
</div>
</div>
</div>
<!-- main contaeiner open -->



<script>

const myFun= () => {
	let qty=document.getElementById('qty').value;
	let price=document.getElementById('uprice').value;
	
	let total = qty*price;
	var data=document.getElementById('totalprice').value=total;
	alert(data);


}

</script>
	
</body>
</html>


<!-- php close  -->
<?php
}

?>
<!-- php close  -->



<?php

include('../database/db_connection.php');
if(isset($_POST['submit'])){
	$purchasedate=$_POST['purchasedate'];
	$supplierid=$_POST['supplierid'];
	$productid=$_POST['productid'];
	$quantity=$_POST['quantity'];
	$unitprice=$_POST['unitprice'];
	$totalprice=$_POST['totalprice'];

	$sql="update purchase set PurchaseDate='$purchasedate', SupplierId='$supplierid', ProductId='$productid',
	Quantity='$quantity',UnitPrice='$unitprice',TotalPrice='$totalprice' where PurchaseId='$updateid'";
	echo $sql;

	$query=mysqli_query($con,$sql);
	if($query){
		
			header('location:purchase.php');
	}
	else{
		echo "<script>alert('update failed');</script>";
	}
}
