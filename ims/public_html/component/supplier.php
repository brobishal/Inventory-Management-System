<?php
session_start();
if(!isset($_SESSION['adminid'])){
 header('location:../adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=
	, initial-scale=1.0">
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
		padding:100px 10px 30px 40px;
		background:#ddd;
		width:600px;
		height:300px;
		margin-left:50px;
		padding:20px;
		margin-top:90px;
		border-radius:5px;	
	}
	.box1 h1{
		font-size:30px;
		
	}
	form{
		padding-top:0px;
	}

	.box1 h1{
		text-align:left;
		padding:10px 0px;
		color:#003147;
	}

	input[type="text"]{
		width:100%;
		height:40px;
		border:1px solid #ccc;
		padding:12px 12px;
		margin:10px 0px;
		border-radius:5px;
		display:inline-block;	

	}
	input[type="submit"]{
		width:100%;
		height:40px;
		background:#03a9f4;
		border:none;
		cursor:pointer;
		border-radius:5px;
		padding:12px 12px;
		margin:10px 0px;
		color:#fff;
	}
	input[type="submit"]:hover{
		background:#03a9f4;
		border:1px solid #ddd;
	}

	/* box 2 */
	.box2{
		padding:20px;
		margin:70px 0px;
	}
	.box2 h1{
		font-size:30px;
		text-align:center;
		padding-bottom:15px;
	}

	table {
		border-collapse:collapse;
		width:100%;
	}
	.box2 table thead tr{
		border-radius:5px;
	}

	.box2 table thead th{
		background:#003147;
		color:#fff;
		text-align:center;
	}


	.box2 table tbody tr td{
		text-align:center;
		padding:20px;
		border-bottom:1px solid #ddd;
	}
	

	</style>
	</style>
</head>
<body>
<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>
<div class="main">
	<div class="box1">
	<form method="POST">
	<h1>Add Supplier</h1>
	<div>
		<label>Supplier Name</label>
		<input type="text" name="suppliername" required/>
	</div>
	<div>
		<label>Email</label>
		<input type="text" name="Email" required/>
	</div>
	
	<input type="submit" name="submit" value="add">
	<p id="para"></p>

		
	</form>
	</div>
<!-- suppiler data show -->

<div class="box2">
	<h1>Supplier Details</h1>
<table>
		<thead>
			<tr>
			<th>Supplier Id</th>
			<th>Supplier Name</th>
			<th>Email</th>
			<th>Status</th>
			<th colspan="1">Edit</th>
			<th>Delete</th>

			</tr>
		</thead>
	<?php

	include('../database/db_connection.php');
	$sql="select * from Supplier";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){
		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['SupplierId']; ?></td>
				<td> <?php echo $data['SupplierName']; ?></td>
				<td> <?php echo $data['Email']; ?></td>
				<td> <?php echo $data['Status']; ?></td>
				<tr>
		</tbody>

		<?php
	}
	



?>

	</table>

	<!-- suppiler data show -->

</div>
</div>

</body>
</html>

<?php

include('../database/db_connection.php');
if(isset($_POST['submit'])){
	$suppliername=$_POST['suppliername'];
	$email=$_POST['Email'];

	 $sql="insert into Supplier(SupplierName,Email)values('$suppliername',
	 '$email')";
	 $data=mysqli_query($con,$sql);
	 if($data){
		 ?>
	 <script>
			document.getElementById('para').innerHTmL="Supplier Successfully Added";
		</script>

		 <?php
	 }
	 else{

		?>
		<script>
		document.getElementById('para').innerHTmL="Filed";
	</script>
	<?php
	 }


}


?>