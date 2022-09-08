<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=
	, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style1.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	<style>
	*{
		margin:0px;
		padding:0px;
		font-family:'Poppins',sans-serif;
		box-sizing:border-box;

		/* box-sizing:border-box diyena vane if actual width and height ma if padding, ra border
		diyo vane actual height 100px xa vane padding 10px ra border 5px maa jodiyera 100px+10px+5px =115px
		huncha ifdiyo  vane actual width nai rahanchha 
		
		*/


	}

	.main{
		position:relative;
		width:100%;	
		height:100vh;

	}
	.box{
		width:400px;
		height:500px;
		background:#ddd;
		margin-left:550px;
		padding:20px;

	}

	

	input[type="text"],
	input[type="password"],
	input[type="email"],
	input[type="address"],
	input[type="number"],
	input[type="submit"]{
		width:100%;
		height:30px;
		padding:10px 0px;
		margin:10px 0px;
	}


	

	.inputBox .input_field{
			border-radius:5px;
			padding:5px;
			width:100%;
			font-size:16px;
			letter-spacing:1px;
			margin:10px 0px;
			border:none;
			outline:none;

	
	}

	.inputBox label{
		color:#fff;
		padding:20px 0px;
	

	}

	.btn{
	
		font-size:15px;
		padding:4px 10px;
		border:none;
		outline:none;
		font-weight:bold;
		border-radius:5px;

	}


	.btn:hover{
		background:#03a9f4;
		color:#fff;
		transition:0.5s;
	
	}
	
	</style>

	<title>Document</title>
</head>
<body>
<div class="main_div">
<div class="box">

	<form method="POST">
	<h1>Register Here</h1>
	<div class="inputBox">
		<label>name</label>
		<input type="text" name="name" class="inputField" required/>
	</div>
	<div class="inputBox">
		<label>Password</label>
		<input type="password" name="password" required/>
	</div>
	<div class="inputBox">
		<label>Email</label>
		<input type="email" name="email" required/>
	</div>
	<div class="inputBox">
		<label>Address</label>
		<input type="address" name="address" required/>
	</div>
	<div class="inputBox">
		<label>Contact Number</label>
		<input type="number" name="number" required/>
	</div>
	
	<input type="submit" name="submit" value="add">
	<h5><a href="http://localhost/ims/public_html/customer/login.php" style="color:#fff">Login Here</a></h5>

		
	</form>
	</div>
	</div>

</body>
</html>

<?php

include('../database/db_connection.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['number'];


	$status=1;

	 $sql="insert into Customer(CustomerName,Password,Email,Address,ContactNumber,Status)values('$name',
	 '$password','$email','$address','$contact','$status')";
	 echo $sql;
	 $data=mysqli_query($con,$sql);
	 if($data){
		 echo "You have successfully register";
		 header('location:login.php');
	 }
	 else{
		 echo "Register failed";
	 }


}


?>