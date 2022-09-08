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
	background:#f1f1f1;

	}
	.box1{
		margin-top:100px;
		margin-left:100px;
		border:1px solid lightgray;
		width:60%;
		padding:20px;
		background:#ddd;
		border-radius:5px;
	}
	.box1 h1{
		font-size:25px;
		margin-bottom:5px;
	}

	input[type="date"],
	input[type="text"],
	input[type="number"],
	select{
		width:100%;
		margin:7px 0px;
		border-radius:5px;
		height:28px;
		border:1px solid gray;
	}
	input[type="submit"]{
		width:100%;
		margin:7px 0px;
		border-radius:5px;
		height:28px;
		border:1px solid gray;
		background:#03a9f4;
	}


	.box2{
		margin-left:20px;
		margin-top:40px;
		padding-right:20px;
	}
	

	.box2 .mytable tbody tr td{
		text-align:center;
		padding:10px;
		border-bottom:1px solid #ddd;

		
	}
	a{
	 color:blue;
	}

	table{
		width:100%;
		margin:30px;
		
	}
	
	
	.box2 .mytable tbody tr:hover{
		background:#ddd;
	}
	.box2 .mytable thead tr td{
		background:#003147;
		color:#fff;
		height:40px;
		text-align:center;
	}
	.box2 table thead tr th:last-row{
		
	}
	.box2 .mytable{
		width:100%;
		border-collapse:collapse;
	}




	
	</style>
	

	
</head>
<body>
<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>

<div class="main">
<div class="box1">
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
			<input type="number" id="qty" name="quantity" >
		</div>
		<div> 
			<label>Unit Price</label>
			<input type="number" name="unitprice" id="uprice" value="" onchange="myFun()" >
		</div>
		<div>
			<label>Total Price</label>
			<input type="number"name="totalprice" id="totalprice">
		</div>

				 
		<input type="submit" name="submit" value="add sale" >
		<p id="para"></p>
	
		</form>
			</div>
			<div class="box2">

<!-- sale retrive data -->
<table class="mytable" >
		<thead>
			<tr>
			<td>Sale Id</td>
			<td>Sale Date</td>
			<td>Custome Id</td>
			<td>Product Id</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Total Price</td>
			<td colspan="2">Manage</td>

			<tr>

		</thead>
			<?php

			include('../database/db_connection.php');
			$sql="select * from Sale";
			$query=mysqli_query($con,$sql);
			while($data=mysqli_fetch_array($query)){
				
				?>
				<tbody>
					<tr>
						<td> <?php echo $data['SaleId']; ?></td>
						<td> <?php echo $data['SaleDate']; ?></td>
						<td> <?php echo $data['CustomerId']; ?></td>
						<td> <?php echo $data['ProductId']; ?></td>
						<td> <?php echo $data['Quantity']; ?></td>
						<td> <?php echo $data['UnitPrice']; ?></td>
						<td> <?php echo $data['TotalPrice']; ?></td>
						<td><a href="updatesale.php?id=<?php echo $data['SaleId'];?>">Edit</a></td>
						<td><a href="saledelete.php?id=<?php echo $data['SaleId'];?>">Delete</a></td>
					<tr>
				</tbody>

				<?php
			}




			?>
</div>
</div>


<script>

const myFun= () => {
	let qty=document.getElementById('qty').value;
	let price=document.getElementById('uprice').value;
	
	let total = qty*price;
	document.getElementById('totalprice').value=total;


}

</script>

</div>
</div>
	
</body>
</html>



<?php

include('../database/db_connection.php');

if(isset($_POST['submit'])){
	$saledate=$_POST['saledate'];
	$customerid=$_POST['customerid'];
	$productid=$_POST['productid'];
	$quantity=$_POST['quantity'];
	$unitprice=$_POST['unitprice'];
	$totalprice=$_POST['totalprice'];

	$sql="insert into Sale(SaleDate,CustomerId,ProductId,
	Quantity,UnitPrice,TotalPrice)values('$saledate','$customerid','$productid',
	'$quantity','$unitprice','$totalprice')";
	$query=mysqli_query($con,$sql);
	if($query){
		?>
	<script>
		document.getElementById('para').innerHTML="Data inserted";
	</script>

		<?php
	}
	else{
	?>

		<script>
		alert("failed");
		</script>

	<?php
	
	
	}
	

}


?>