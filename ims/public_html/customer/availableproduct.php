<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/style.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	
	<title>Document</title>

	<style>
		*{
			padding:0px;
			margin:0px;
			box-sizing:border-box;
		}
		.box1{
			margin:130px 20px;
			padding:20px;
		}

		.box1 h1{
			font-size:25px;
			margin-bottom:20px;
			text-align:center;
		}
		.box1 table thead th{
			text-align:center;
			background:#003147;
			color:#fff;
		}
		.box1 table tbody tr td{
			text-align:center;
			padding:15px;
			border:1px solid #ddd;
		}

		.box1 table tbody tr:hover{
			background:#ddd;
		}
		table{
			width:100%;
			padding:20px;
			border-collapse:collapse;
		}

	</style>
</head>
<body>
<?php include('include/sidebar.php'); ?>
<?php include('include/header.php'); ?>

	<div class="main">
	<div class="box1">
	<h1>Availabe Product</h1>
	<table>
		<thead>
			<th>Product Id</th>
			<th>Category Id</th>
			<th>Brand Id</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Product Quantity</th>
			<th>Added Date</th>
			<th>Product Status</th>
			
		</thead>
	<?php


include('../database/db_connection.php');
	$sql="select * from Product";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){
		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['ProductId']; ?></td>
				<td> <?php echo $data['CategoryId']; ?></td>
				<td> <?php echo $data['BrandId']; ?></td>
				<td> <?php echo $data['ProductName']; ?></td>
				<td> <?php echo $data['ProductPrice']; ?></td>
				<td> <?php echo $data['Produtstock']; ?></td>
				<td> <?php echo $data['AddedDate']; ?></td>
				<td> <?php echo $data['ProductStatus']; ?></td>
				<tr>
		</tbody>

		<?php
	}
	



?>

	</table>
	</div>
    </div>


	
	
</body>
</html>


