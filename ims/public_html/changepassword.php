<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" >
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
				display:flex;
				justify-content:center;
				align-items:center;				
				
			}

			.box1{
				margin-top:150px;
				background:#ddd;
				width:400px;
				height:370px;
				padding:30px;
				border-radius:5px;
				box-shadow:1px 1px 15px 1px gray,1px 1px 15px 1px gray;


			}
			input[type="id"],
			input[type="password"]{
				width:100%;
				height:25px;
				margin:10px 0px;
				padding:15px 5px;
				border-radius:5px;
				border:1px solid gray;

			}

			input[type="submit"]{
				width:100%;
				height:25px;
				margin:10px 0px;
				padding-top:4px;
				border-radius:5px;
				background:#03a9f4;
				border:1px solid gray;
				color:#fff;
				padding-bottom:20px;
				cursor:pointer;
				}
				input[type="submit"]:active{
					transform:scale(0.98,1);
					box-shadow:2px 2px 22px 1px rgba(0,0,0,0.24);
				}
				

			.box1 h1{
				font-size:20px;
				padding:10px 0px;

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
	<div class="box1">
	<h1>Change Passoword</h1>
			<form method="POST" action="">
				<div class="lev1">
					<label>Id</label>
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
include('database/db_connection.php');

if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$newpass=$_POST['newpassword'];
		$confirmpass=$_POST['confirmpassword'];	
		if($newpass==$confirmpass){

		$sql="update admin set password='$newpass' where id='$id'";
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