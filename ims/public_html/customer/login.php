<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

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
	body{
		background:#ddd;
	}

	.main{
		position:relative;
		width:100%;	
		height:100vh;

	}

	.box{
		position:absolute;
		width:400px;
		height:300px;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		background:#003147;
		padding:40px;
		border-radius:10px;
	
	}

	.box h1{
		text-align:center;
		top:0;
		padding:10px 0;
		font-size:26px;
		color:#fff;
		text-transform:capitalize;
		

	}


	.inputBox{
		position:relative;
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
	.main3{
		display:flex;
		justify-content:left;
		align-items:center;


	}
	.reg{
		margin-left:20px;
		color:#fff;

	}
	.reg h5 a{
		color:#fff;
		text-decoration:none;
	}
	</style>

</head>
<body>

<div class="main_div">

<div class="box">
<h1>Customer Login</h1>
<form action="" method="POST" style="b-order:1px solid #ccc">
<div class="container">

<div class="inputBox">
<label>Username</label>
	<input type="text" name="username" placeholder="username" class="input_field" required/>
</div>
<div class="inputBox">
<label>Password</label>
 <input type="password" name="password" placeholder="password" class="input_field" required/>
</div>
<div class="main3">
<input type="submit" name="login" value="login" class="btn">
<div class="reg">
<h5><a href="http://localhost/ims/public_html/customer/register.php">Register</a></h5>
</div>
</div>

</div>
</form>
</div>
	
</body>
</html>

<?php


include('../database/db_connection.php');

if(isset($_POST['login'])){
$uname=$_POST['username'];
$pass=$_POST['password'];

$sql="select * from Customer where CustomerName='$uname' and Password='$pass'";
echo $sql;
$query=mysqli_query($con,$sql);

$data=mysqli_num_rows($query);
if($data<1){
	?>

	<script>
		alert("Incorrect Password or email");
	</script>
	<?php

}
else{

	$result=mysqli_fetch_array($query);
	$customer_id=$result['CustomerId'];


if($_SESSION['customerid']=$customer_id){
	header('location:index.php');}




}
}
?>
