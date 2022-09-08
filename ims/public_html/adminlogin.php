<?php

session_start();
if(isset($_SESSION['adminid']))
	{
		header('location:admin/index.php');

	}
	else{

		?>
		<script>
			
		</script>
		<?php
		}

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
	</style>

</head>
<body>

<div class="main_div">

<div class="box">
<h1>Admin Login</h1>
<form action="" method="POST" style="b-order:1px solid #ccc">
<div class="container">

<div class="inputBox">
<label>Username</label>
	<input type="text" name="username" placeholder="username" class="input_field" autocomplete="off" required/>
</div>
<div class="inputBox">
<label>Password</label>
 <input type="password" name="password" placeholder="password" class="input_field" required/>
</div>
<input type="submit" name="login" value="login" class="btn">
</div>
</form>
</div>
	
</body>
</html>

<?php


include('database/db_connection.php');

if(isset($_POST['login'])){
$uname=$_POST['username'];
$pass=$_POST['password'];

$sql="select * from admin where username='$uname' and password='$pass'";
$query=mysqli_query($con,$sql);

$data=mysqli_num_rows($query);
if($data<1){
	?>

	<script>
		alert("incorrect Username and Password");
	</script>
	<?php

}
else{

	$result=mysqli_fetch_array($query);
	
	$admin_id=$result['id'];


	$_SESSION['adminid']=$admin_id;
	header('location:admin/index.php');
}
}
?>
