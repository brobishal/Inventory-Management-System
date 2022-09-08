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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Document</title>

	<style >
	*{
		margin:0px;
		padding:0px;
		box-sizing:border-box;

	}
	.main1{
		width:80vw;
		background:#f1f1f1;
		height:100%;
	}
	.box1{
		margin:70px 100px;
		max-width:600px;
		width:100%;
		background:#ddd;
		height:530px;
		padding:10px;
		display:flex;
		flex-direction:column;
	
	}
	.box1 h2{
		font-size:25px;
		margin-bottom:7px;
		

	}

	.box1 .form{
		width:100%;
	}

	.box1 .form .input{
		margin-bottom:3px;
		display:flex;
		align-items:center;
	}
	.box1 .form .input label{
		width:200px;
		margin-right:10px;
	}
	input[type="text"],
	input[type="date"],
	select,
	input[type="number"]{
		height:28px;
		width:100%;
		margin:4px;
		padding:0px 10px;
		border-radius:5px;
		border:1px solid gray;
		/* font-size:15px; */
		transition:all 0.3s ease;
	}
	input[type="submit"]{
		height:10px;
		width:100%;
		margin:8px;
		padding:13px 10px;
		border-radius:5px;
		border:1px solid #d5dbd9;
		font-size:15px;
		transition:all 0.3s ease;
		background:#03a9f4;

	}
	input[type="submit"]:active{
		transform:scale(0.99);
	}
	</style>
</head>
<body>
<?php include('include/sidebar.php'); ?>
<?php include('include/header.php'); ?>


<!-- main block -->

<div class="main1">
	<div class="box1">

	<form method="POST" class="form">
	<h2>Order Now</h2>
	<div class="input">
		<label>Order Date</label>
		<input type="date" name="orderdate" value="<?php echo date('Y-m-d');?>" readonly/>
	</div>
	<div class="input">
		<label>Customer Name</label>
		<input type="text" name="customername" placeholder="Enter your name" value="" required/>
	</div>

	<div class="input">
		<label>ProductId</label>
		<select name="productid" id="myProduct" onselect="subProduct()">
		<option value="" disabled selected>Select Here</option>
		<?php 
	include('../database/db_connection.php');

		$data=mysqli_query($con,"select * from Product");
		$result=mysqli_num_rows($data);
		echo $result;
		while($row=mysqli_fetch_array($data)){
			?>
		<option><?php echo $mydata=$row['ProductId'];?></option>
			<?php

		}

		?>		
		</select>
	</div>

	<!-- category -->
	<div class="input">
	<label>Category</label>

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
		</select>
	</div>
		<div class="input">
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
	</div>
	
	<div class="input">
		<label>Quantity</label>
		<input type="text" name="quantity" id="qty" placeholder="Enter Product Name" required/>
	</div>
	<div class="input">
		<label>Price</label>
	<input type="text" name="price" id="para"   placeholder="" onchange="myFun();" required/>
	</div>
	<div class="input">
		<label>TotalPrice</label>
		<input type="text" name="totalprice" id="totalprice" placeholder="" required/>
	</div>
	<div class="input">
		<label>Full Paid</label>
		<input type="number" name="fullpaid" placeholder="" required/>
	</div>
	<div class="input">
		<label>Due</label>
		<input type="number" name="due" placeholder="" required/>
	</div>
	<div class="input">
		<label>Payment</label>
		<select name="payment">
			<option name="">Select</option>
			<option>On Cash</option>
	</select>
	</div>

<input type="submit" name="submit" value="Get Order">

		
	</form>
</div>
</div>

<script>
	const myFun1= () => {
	let qty=document.getElementById('qty').value;
	let price=document.getElementById('price').value;
	
	let total = qty*price;
	document.getElementById('totalprice').value=total;

}
function subProduct() {
            var mydata = document.getElementById("myProduct").value;
            alert(mydata);
            
			ajx.onreadystatechagne = function () {
                if (ajx.readyState == 4 && ajx.status == 200) {
                    document.getElementById("message").innerHTML = ajx.responseText;
                }
            };
            ajx.open("POST", "authenticate.php", true);
            ajx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajx.send(creds);
            //document.getElementById("message").innerHTML = creds;
        }
        //     $(document).ready(function(){
        //     $('#myproduct').change(function(){
        //         //Selected value
        //         var inputValue = $(this).val();
        //         alert("value in js "+inputValue);
		// var mydoc=document.geElementById("para").value= inputValue;
		// function myFun(mydoc){
		// 	var mydoc1=mydoc;
		// 	return mydoc1;
		// }
		// myFun1();

				

					
                //Ajax for calling php function
                // $.post('submit.php', { myproduct: inputValue}, function(data){
                //     alert('ajax completed. Response:  '+data);
                    //do after submission operation in DOM
				// });


      
      
</script>



</body>
</html>

<?php


include('../database/db_connection.php');

//gettingsubcategory
// include('../funciton')
if(isset($_POST['submit'])){
	$odate=$_POST['orderdate'];
	$cname=$_POST['customername'];
	$productid=$_POST['productid'];
	$categoryid=$_POST['categoryid'];
	$brandid=$_POST['brandid'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
	$totalprice=$_POST['totalprice'];
	$fullpaid=$_POST['fullpaid'];
	$due=$_POST['due'];
	$payment=$_POST['payment'];
	
	 $sql="insert into Orders( OrderDate,CustomerName,
	 ProductId, CategoryId, BrandId,Quantity, Price,TotalPrice,FullPaid,Due,Payment)values('$odate',
	 '$cname','	$productid','$categoryid','	$brandid','$quantity','$price','$totalprice','$fullpaid','$due','$payment')";
echo $sql;
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
