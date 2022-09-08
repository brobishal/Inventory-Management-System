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

	<style>
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
			padding:30px;
			height:350px;
			border-radius:5px;
		}
		.box1 h2{
			font-size:25px;
			margin-bottom:5px;
		}
		input[type="text"],
		input[type="address"],
		input[type="email"],
		input[type="contact"]{
			width:100%;
			height:30px;
			margin:5px 0px;
			border-radius:5px;
			border:1px solid gray;
		
			
		}
		input[type="submit"]{
			width:100%;
			height:30px;
			margin:5px 0px;
			border-radius:5px;
			border:1px solid gray;
			background:#03a9f4;
			color:#fff;
			font-size:15px;
		
			
		}

		
	</style>
</head>
<body>

<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>
	<div class="main">
		<div class="box1">
			<h2>Add Deliver</h2>
			<form method="POST" action="">
				<label>Name</label>
				<input type="text" name="name" required/><br/>
				<label>Address</label>
				<input type="address" name="address" required/><br/>
				<label>Email</label>
				<input type="email" name="email" required/><br/>
				<label>Contact</label>
				<input type="contact" name="contact" required/><br/>
				<input type="submit" name="submit" value="Add Deliver">


			</form>

		</div>
	</div>
	
</body>
</html>

<?php

include('../database/db_connection.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];

	$status=1;
	$sql="insert into Employee(EmployeeName,EmployeeAddress,EmployeeEmail,EmployeeContact,Status) 
	values('$name','$address','$email','$contact','$status')";
	echo $sql;
	$query=mysqli_query($con,$sql);
	if($query){
		echo "data insert";
	}
	else{
		echo "data inserted failed";
	}
}


?>