<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

	<title>Invoice Generator</title>

	<style>
		*{
			margin:0px;
			padding:0px;
			box-sizing:border-box;
		}
		.main{
			width:80vw;


		}
		.content{
			display:flex;
			justify-content:center;
		
		}
		.box1{
			margin-top:90px;
			margin-left:40px;
			background:#ddd;
			height:350px;
			width:600px;
			padding:50px 100px;
		}
		.box1 h1{
			font-size:25px;
			margin-bottom:20px;
			margin-top:0px;
		}
		select,
		input[type="date"]{
			width:100%;
			height:30px;
			border-radius:5px;
			margin:0px 0px 15px 0px;
		}
		input[type="submit"]{
			width:100%;
			height:30px;
			border-radius:5px;
			margin:0px 0px 15px 0px;
			background:#03a9f4;
		}
	</style>
</head>
<body>
	<!-- navigation as a sidebar -->
<?php include('admin/includes/sidebar.php'); ?>
<!-- navigation as a sidebar --> 


<!-- topbar -->
<?php include('admin/includes/header.php'); ?>
<!-- topbar -->
	<div class="main">
		<div class="content">
	<div class="box1">
	
	<form method="POST" action="">
		<h1>Invoice Generate</h1>
		
		<label>Customer Id</label>
		<select> 
			<option>Select Here</option>
		<?php
		include('database/db_connection.php');
		$sql=mysqli_query($con,"select * from customer");
		while($data=mysqli_fetch_array($sql)){
		?>
		<option><?php echo $data['CustomerId'];?></option>

		<?php 
		}
		?>
	</select>
	</br>
	<label>Date</label>
	<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly/>
	<br/>
	<input type="submit" name="submit" value="Invoice Generate">

	</form>
	</div>
	</div>
	</div>
	
</body>
</html>