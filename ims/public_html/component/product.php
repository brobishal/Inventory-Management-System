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
	<!-- <link rel="stylesheet" href="../css/style.css" > -->
	<link rel="stylesheet" href="../css/style.css" >

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	

	<title>Document</title>

	<style >
		*{
			padding:0px;
			margin:0px;
			box-sizing:border-box;
		}
		.main{
			width:80vw;
			background:#f1f1f1;
		

			
		}
		.box1{
			margin:100px 40px;
			background:#ddd;
			width:500px;
			height:520px;
			padding:15px 70px;
			border-radius:5px;

		}

		.box1 h2{
			margin:10px 0px;
		}
		select,
		input[type="text"],
		input[type="quantity"],
		input[type="date"]{
			width:100%;
			height:25px;
			margin:8px 0px;
			border-radius:5px;
			padding:10px;

		}
		input[type="submit"]{
			width:100%;
			height:25px;
			margin:8px 0px;
			border-radius:5px;
			background-color:#03a9f4;
		}
		input[type="submit"]:hover{
			color:#fff;
		}
		table{
			width:100%;
			padding:20px;
			border-collapse:collapse;
		}
	
		.box2{
			width:100%;
			padding:20px;

		}
		.box2 table thead tr th{
			text-align:center;
			background:#ddd;


		}

	</style>
</head>
<body>
<?php include('../admin/includes/sidebar.php'); ?>
<?php include('../admin/includes/header.php'); ?>

<!-- main block -->

<div class="main">
<div class="box1">
	<form method="POST">
	<h2>Add Product</h2>
	<label>Category</label>
	</select>

		<select name="categoryid" >Category
		<option value="Select Here">Select Here</option>
		<?php 
	include('../database/db_connection.php');

		$data=mysqli_query($con,"select * from Category");
		$result=mysqli_num_rows($data);
		echo $result;
		while($row=mysqli_fetch_array($data)){
			?>
		<option><?php echo $row['CategoryId'] .$row['CategoryName'];?></option>
			<?php

		}

		?>
		<option></option>
		
		</select>

		<label>Brand</label>
		<select name="brandid" id="getcategory"> 
			<option value="Select Here">Select Here</option>
		<?php 
	include('../database/db_connection.php');

		$data=mysqli_query($con,"select * from Brand");
		$result=mysqli_num_rows($data);
		echo $result;
		while($row=mysqli_fetch_array($data)){
			?>
		<option><?php echo $row['BrandId'] . $row['BrandName'];?></option>
			<?php

		}

		?>
	
		</select>
	
	<div>
		<label>	Product Name</label>
		<input type="text" name="productname" placeholder="Enter Product Name" required/>
	</div>
	<div>
		<label>Purchase Price</label>
		<input type="text" name="purchaseprice" placeholder="Enter Purchase Price" required/>
	</div>
	<div>
		<label> Selling Price</label>
		<input type="text" name="sellingprice" placeholder="Enter Selling Price" required/>
	</div>
	<div>
		<label>Quantity</label>
		<input type="quantity" name="quantity" placeholder="Enter Product Quantity" required/>
	</div>  
	<div>
		<label>Added Date</label>
		<input type="date" name="date" value="<?php echo date('Y-m-d');?>" readonly/>
	</div>
<input type="submit" name="submit" value="add Product">

		
	</form>

	</div>
	<div class="box2">
	<!-- serach box -->
	<!-- <form method="post">
		<input type="textbox" name="name" required/>
		<input type="submit" name="search" value="search">
	</form> -->
	<table class="content-table">
		<thead>
		<tr>
			<th>Product Id</th>
			<th>Category Id</th>
			<th>Brand Id</th>
			<th>Name</th>
			<th>Purchase Price</th>
			<th>Selling Price</th>
			<th>Quantity</th>
			<th>Added Date</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		
		</tr>
			
		</thead>
	<?php


include('../database/db_connection.php');

	$sql="select * from Product";
	$query=mysqli_query($con,$sql);
	while($data=mysqli_fetch_array($query)){

		
		?>
		<tbody>
			<tr>
				<td> <?php echo $data['ProductId']; ?></td>
				<td> <?php echo $data['CategoryId']; ?></td>
				<td> <?php echo $data['BrandId']; ?></td>
				<td> <?php echo $data['ProductName']; ?></td>
				<td> <?php echo $data['ProductPrice']; ?></td>
				<td> <?php echo $data['ProductSellPrice']; ?></td>
				<td> <?php echo $data['Produtstock']; ?></td>
				<td> <?php echo $data['AddedDate']; ?></td>
				<td> <?php echo $data['ProductStatus']; ?></td>
				<td><a href="poductupdate.php?id=<?php echo $data['ProductId']; ?>">Edit</a></td>
				<td><a href="productdelete.php?id=<?php echo $data['ProductId']; ?>">Delete</a></td>
				<tr>
		</tbody>

		<?php
	}

	



?>


	</table>
	<!-- display product -->
	</div>
</div>
</div>


</body>
</html>

<?php


include('../database/db_connection.php');

//gettingsubcategory
// include('../funciton')
if(isset($_POST['submit'])){
	$cid=$_POST['categoryid'];
	$bi=$_POST['brandid'];
	$pname=$_POST['productname'];
	$pprice=$_POST['purchaseprice'];
	$sprice=$_POST['sellingprice'];
	$qty=$_POST['quantity'];
	$date=$_POST['date'];
	

	$status=1;
	 $sql="insert into product(CategoryId,BrandId,ProductName,
	 ProductPrice,ProductSellPrice,Produtstock,AddedDate,ProductStatus)values('$cid',
	 '$bi','$pname','$pprice','	$sprice','$qty','$date','$status')";
	 $data=mysqli_query($con,$sql);
	 if($data){
		
		?>
		<script>
			alert('Product Added Successfully');
		</script>
		<?php
	 }
	 else{
		 ?>

		<script>
			alert('Filed to added');
		</script>
		 <?php
		
	 }


}


?>




<!-- 
1: with the help ajax  we create object of xamHttp
2: when obj cretaed then after with the help of obj we create request by using open method
3: once we created request then send that  resuest to server
4: and after that sever check the request and process and we know the (status) which is 
 complete or not
5: After completing or succssfull then sever gives the response add data


open


 -->
