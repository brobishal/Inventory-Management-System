

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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
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
		width:400px;
		height:200px;
		margin-left:50px;
		padding:50px;
		margin-top:90px;
		border-radius:5px;
	}
	.box1 h1{
		font-size:20px;
		margin:10px;

	}
	input[type="text"]{
		width:100%;
		height:30px;
		margin:5px;
	}
	input[type="submit"]{
		width:100%;
		height:30px;
		margin:5px;
		background:#03a9f4;
		border:none;
		cursor:pointer;
	}

	.box2{
		margin:50px 0px;
		padding:20px;
	}

	.box2 h1{
		font-size:30px;
		text-align:center;
		margin:10px;
	}
	table{
		width:100%;
		border-collapse:collapse;
	}

	.box2 table thead th{
		background:#ddd;
	}
	.box2 table tbody tr td{
		padding:10px;
		border-bottom:1px solid #ddd;
	}


	</style>
	<title>Document</title>
	</style>
</head>
<body>
<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>


	<div class="main">
	<div class="box1">

	<form method="POST" action="">
	<h1>Add Brand</h1>
	<div>
		<label>Brand Name</label>
		<input type="text" name="brand" placeholder="Enter Brand Name" required=""/>
	</div>
	<input type="submit" name="add" value="add Brand">
	<p id="para" style="color:red;"></p>
	</form>	

	

	</div>
	
	<!-- display brand -->
	<div class="box2">
<h1>Brand Details</h1>

	<table>
		<thead>
			<th>BrandId</th>
			<th>Brand Name</th>
			<th>Status</th>
		</thead>
	<?php


include('../database/db_connection.php');
	$sql="select * from Brand";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){
		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['BrandId']; ?></td>
				<td> <?php echo $data['BrandName']; ?></td>
				<td> <?php echo $data['Status']; ?></td>
			<tr>
		</tbody>

		<?php
	}
	



?>

</table>
		</div>
	<!-- display brand -->
</body>
</html>



<?php
include('../database/db_connection.php');
if(isset($_POST['add'])){
	$brand=$_POST['brand'];
	$status=1;
	
	$sql="insert into Brand(BrandName,Status)values('$brand','$status')";
	$data=mysqli_query($con,$sql);
	 if($data){
		?>

		<script>
			document.getElementById('para').innerHTML="Brand Name Successfully Added";
		</script>

		<?php
	 }
	 else{
		?>
		 
		<script>
			document.getElementById('para').innerHTML="Brand Name Added to Failed";
		</script>
		<?php
	 }



}



?>