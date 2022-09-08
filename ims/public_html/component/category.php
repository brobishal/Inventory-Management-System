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
		margin-top:100px;
		margin-left:50px;
		width:70%;
		background:#ddd;
		height:300px;
		padding:30px;
	}

	.box1 h1{
		font-size:25px;
		margin:10px 0px;
		
	}
	.box2{
		margin-top:70px;
		margin-left:40px;
		padding:20px;



	}
	
	input[type="text"],
	select{
		width:100%;
		height:20px;
		margin:10px 0px;
		padding:15px;
		border-radius:5px;
		border:none;

	}
	input[type="submit"]{
		width:100%;
		height:20px;
		margin:10px 0px;
		background:#03a9f4;
		text-align:center;
		padding:15px 0px;
		border-radius:5px;
		border:none;

	}

	.box2 table thead th{
		text-align:center;
		background:gray;
		

	}
	
	table{
		width:100%;
		border-collapse:collapse;
		border-radius:5px;
		
	}

	.box2 h1{
		font-size:25px;
		margin:20px 0px;
	}

	.box2 table tbody tr td{
		text-align:center;
		padding:10px;
		border-bottom:1px solid #ddd;
	}

	.box2 table tbody tr:hover{
		background:#ddd;
	}


	</style>
</head>
<body>
	
<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>

<div class="main">
<div class="box1">
	<form method="POST" action="">
<div>

	<h1>Add Category</h1>
	<label>Category Name</label>
	<input type="text" name="categoryname" required/>

</div>
<div>
	<label name>Status</label>
		<select name="status" required>
		<option>Active</option>
		<option>Disactive</option>
	</select>
</div>
<input type="submit" name="add" value="add">
<p id="para"></p>
</form>
</div>
<!-- display product -->
<div class="box2">
<h1>Product Details</h1>
	<table>
		<thead>
			<th>Category Id</th>
			<th>Category Name</th>
			<th>Status</th>
		</thead>
	<?php


include('../database/db_connection.php');
	$sql="select * from Category";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){
		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['CategoryId']; ?></td>
				<td> <?php echo $data['CategoryName']; ?></td>
				<td> <?php echo $data['Status']; ?></td>
			<tr>
		</tbody>

		<?php
	}
	



?>

	</table>
	<!-- display product -->
</div>
</body>
</html>

<?php

include('../database/db_connection.php');
if(isset($_POST['add'])){
	$categoryname=$_POST['categoryname'];
	$status=$_POST['status'];


	$sql="insert into Category(CategoryName,Status)values(	
	'$categoryname','$status')";
	$data=mysqli_query($con,$sql);
	 if($data){
		 ?>
		 <script>
			document.getElementById('para').innerHTmL="Category Successfully Added";
		</script>

		 <?php
	 }
	 else{

		?>
			 <script>
			document.getElementById('para').innerHTmL="Failed to category added";
		</script>
		<?php

	 }



}


?>