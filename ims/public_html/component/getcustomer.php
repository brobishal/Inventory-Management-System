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
	<style >
	*{
		margin:0px;
		padding:0px;
		box-sizing:border-box;

	}
	.main{
		width:80vw;

	}
	.box1{
		margin:100px 40px;
		padding:20px;
	}
	.box1 h1{
		font-size:25px;
	}

	.box1 table thead th{
		text-align:center;
		background-color:#003147;
		color:#fff;

	}
	table{
		width:100%;
		border-collapse:collapse;
	}

	.box1 table tbody tr td{
		text-align:center;
		padding:10px;
		border-bottom:1px solid #ddd;
	}
	.box1 table tbody tr:hover{
		background:#ddd;
		
	}
	.box1 h1{
		margin:20px 0px;
		font-size:25px;
		text-align:left;
		
	}

	</style>
</head>
<body>
<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>

<div clas="main">
<div class="box1">
	<h1>Loged Customer</h1>
	<table>
		<thead>
			<th>Customer Id</th>
			<th>Customer</th>
			<th>Email</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Status</th>
		</thead>
	<?php


include('../database/db_connection.php');
	$sql="select * from Customer";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){
		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['CustomerId']; ?></td>
				<td> <?php echo $data['CustomerName']; ?></td>
				<td> <?php echo $data['Email']; ?></td>
				<td> <?php echo $data['Address']; ?></td>
				<td> <?php echo $data['ContactNumber']; ?></td>
				<td> <?php echo $data['Status']; ?></td>
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


