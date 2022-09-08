<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="include/style1.css">
	<title>Document</title>
	<style> 
			*{
				margin:0px;
				padding:0px;
				box-sizing:border-box;
			}
			.main{
				position:relative;
				width:80vw;
				height:100vh;

			}
			.box{
				position:absolute;
				top:50%;
				left:50%;
				transform:translate(-50%,-50%);
				width:400px;
				padding:40px;
				background:whitesmoke;
			}
			.box lev1{

			}

	</style>
</head>
<body>


<?php  include('include/header.php'); ?>
<?php  include('include/sidebar.php'); ?>

	<div class="main">
	<div class="box">
			<form method="POST" action="">
				<div class="lev1">
					<label>Customer Id</label>
					<input type="id" name="id" placeholder="id">
				</div>
				<div class="lev2">
					<label>New Password</label>
					<input type="password" name="newpassword" placeholder="New Password">
				</div>
				<div class="lev3">
					<label>Confirm Password</label>
					<input type="password" name="confirmpassword" placeholder="Confirm Password">
				</div>
				<input type="submit" name="submit" value="Change Password">
			
			</form>
			<p id="para"></p>
		
		
		</div>
	</div>



</body>
</html>

<?php
include('../database/db_connection.php');

if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$newpass=$_POST['newpassword'];
		$confirmpass=$_POST['confirmpassword'];	

		if($newpass==$confirmpass){

		$sql="update customer set Password='$newpass' where CustomerId='$id'";
		$data=mysqli_query($con,$sql);
		if($data){
			?>
			<script>
				document.getElementById('para').innerHTML="You have susccesfully changed password";
				
			</script>
			<?php
		}
		else{
			?>
			
			<script>
				document.getElementById('para').innerHTML="Failed ";
			</script>
			<?php
			
		}
	}
	else{
		?>
			<script>
				document.getElementById('para').innerHTML="failed";
			</script>
		<?php
		
	}
}
					


?>