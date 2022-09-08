
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="include/style1.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
	

	<title>Document</title>
	<style>
		*{
	margin:0px;
	padding:0px;
	box-sizing:border-box;
	font-family:'poppins',sans-serif;
}

body{
	min-height:100vh;
}

a{
	text-decoration:none;

}

li{
	list-style:none;
}

h3{
	color:#999;
}

.title{
	display:flex;
	align-items:center;
	justify-content:space-between;
	padding:15px 10px;
	border-bottom:2px solid #03a9f4;
}
.recent-payments .title a {
	background:#003147;
	padding:3px;
	border-radius: 5px;
	color:#fff;

}

.btn{
	background-color:#03a9f4;
	color:white;
	border-radius: 10px;
	padding:5px 10px;
	text-align:center;
	transition:0.5s;

}
/* table data */
.content-2 .recent-payments table thead tr td{
    text-align: center;
	background:#003147;
	padding:7px;
	color:#fff;
}
.content-2 .recent-payments table tbody tr td{
    text-align: center;
	padding:8px;
	border-bottom:1px solid #ddd;
}
.content-2 .recent-payments table tbody tr:hover{
	background:#ddd;
}




table{
	width:100%;
	padding:20px;
	border-collapse:collapse;


}
/* table thead td{
	text-align:center;
}
table tbody td{
	text-align:center;
} */

th, tr{
	text-align:left;
	padding:10px;


}


.btn:hover{
	background-color: #003147;
	color:#fff;
	padding:3px 8px;
	border:2px solid #fff;

}

.side-menu{
	position:fixed;
	background:#003147;
	min-height:100vh;
	width:20vw;
	display:flex;
	flex-direction:column;
}

.side-menu .brand-name{
	height:10vh;
	width:100%;
	font-weight:500;
	display:flex;
	align-items:center;
	justify-content:center;
	

}

.side-menu .brand-name h1{
	color:#fff;
}

.side-menu li a{
	font-size:20px;
	color:#fff;
	padding:10px 40px;
	display:flex;
	align-items:center;

	
}

.side-menu li:hover{ 
	background:#03a9f4;
	color:#fff;

}

/* this for whole main content in mid */
.container{
	position:absolute;
	right:0;
	width:80vw;
	height:100vh;
	background:#f1f1f1;

}

.container .header{
	position:fixed;
	top:0;
	right:0;
	width:80vw;
	height:10vh;
	background:#03a9f4;
	display:flex;
	align-items:center;
	justify-content:center;
	box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
	z-index:1;

}

.container .content{
	position:relative;
	margin-top:10vh;
	min-height:90vh;
	background:#f1f1f1;

}

.container .content .cards .card .box h1,h3{
	font-size:20px;

}


.container .content .cards{
	padding:20px 15px;
	display:flex;
	align-items:center;
	justify-content:space-between;
	flex-wrap:wrap;
}

.container .content .cards .card{
	width:250px;
	height:150px;
	background:#fff;
	margin:5px;
	display:flex;
	justify-content:space-around;
	align-items:center;
	box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),
	0 6px 20px 0 rgba(0,0,0,0.18);
}


.container .content .cards .card .iconBox{
	font-size:24px;
	color:#03a9f4;

}
.container .content .content-2 .recent-payments{
	min-height:50vh;
	flex:5;
	background:#fff;
	margin:20px;
	padding:10px;
	box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),
	0 6px 20px 0 rgba(0,0,0,0.18);
	display:felx;
	flex-direction:column;

}


/* for responsive */
@media screen and (max-width:1050px){
	.side-menu li{
		font-size:18px;
	}
}
@media screen and (max-width:940px){
	.side-menu li span{
		display:none;
	}
	.side-menu{
		align-items:center;
	}
	.side-menu li .fas{
		width:40px;
		height:40px;
		font-size:22px;
	}
	.container .content .cards{
		justify-content:center;

	}
}

@media screen and (max-width:770px){
	.container .content .recent-payments table thead td:nth-child(3),
	.container .content .recent-payments table tbody td:nth-child(3){
		display:none;
	}
}


@media screen and (max-width:686px){
	.container .content .recent-payments table thead td:nth-child(4),
	.container .content .recent-payments table tbody td:nth-child(4){
		display:none;
	}
}

@media screen and (max-width:615px){
	.container .content .recent-payments table thead td:nth-child(6),
	.container .content .recent-payments table tbody td:nth-child(6){
		display:none;
	}
}

@media screen and (max-width:425px){
	.container .content .recent-payments table thead td:nth-child(8),
	.container .content .recent-payments table tbody td:nth-child(8){
		display:none;
	}
}

@media screen and (max-width:536px){
	.brand-name h1{
		font-size:16px;
	}
	.container .content .cards{
		justify-content:center;

	}
	.side-menu li .fas{
		width:20px;
		height:20px;
		font-size:16px;
	}

	.container .content .recent-payments table thead td:nth-child(1),
	.container .content .recent-payments table tbody td:nth-child(1){
		display:none;
	}
}


	</style>
</head>
<body>

<!-- navigation as a sidebar -->
<?php include('include/sidebar.php'); ?>
<!-- navigation as a sidebar --> 


<!-- topbar -->
<?php include('include/header.php'); ?>
<!-- topbar -->

<!-- body --,.>

		<!--  content start -->
		<div class="content">
		<!-- cards -->
		<div class="cards">
			<div class="card">
				<div class="box">
					<h1><?php Product(); ?></h1>
					<h3>Product</h3>
				</div>

				<div class="iconBox">
					<i class="fas fa-warehouse"></i>
				</div>
			</div>

			<div class="card">
				<div class="box">
					<h1><?php Purchase(); ?></h1>
					<h3>Purchase</h3>
				</div>

				<div class="iconBox">
					<i class="fas fa-shopping-bag"></i>
				</div>
			</div>

			<div class="card">
				<div class="box">
					<h1><?php sales(); ?></h1>
					<h3>Brand</h3>
				</div>

				<div class="iconBox">
					<i class="fab fa-sellcast"></i>
				</div>
			</div>

			<div class="card">
				<div class="box">
					<h1>
						<?php

							
		$p = new NetProfit();
		$first=$p->myPurchase();
		$second=$p->mySale();
		
		echo($p->profit($first,$second));
						?>
					</h1>
					<h3>Profit</h3>
				</div>

				<div class="iconBox">
					<i class="fas fa-plus"></i>
				</div>
			</div>
		</div>
				<!-- cards -->

		<div class="content-2">
			<div class="recent-payments">
				<div class="title">
					<h2>Yours Orders</h2>
					<a href="#">View All</a>
				</div>
				<table>
						<thead>
							<tr>
								<td>Id</td>
								<td>Date</td>
								<td>Name</td>
								<td>Product</td>
								<td>Category</td>
								<td>Brand</td>
								<td>Quantity</td>
								<td>Price</td>
								<td>Total Price</td>
								<td>Full Paid</td>
								<td>Due</td>
								<td>Payment</td>
							</tr>
							
						</thead>
						<?php

			include('../database/db_connection.php');
			if(isset($_SESSION['customerid'])){	
					$mydd=$_SESSION['customerid'];
					echo $mydd;

				$sql1="select * from customer where CustomerId=$mydd";
				echo $sql1;
			$query1=mysqli_query($con,$sql1);
			if($query1){
				echo "show only id 6 related"; 
					
			$query=mysqli_query($con,"select * from orders where CustomerName=");
			while($result=mysqli_fetch_array($query)){
				?>
				
				<tbody>
						<tr>
							<td> <?php echo $result['OrderId']; ?></td>
							<td> <?php echo $result['OrderDate']; ?></td>
							<td> <?php echo $result['CustomerName']; ?></td>
							<td> <?php echo $result['ProductId']; ?></td>
							<td> <?php echo $result['CategoryId']; ?></td>
							<td> <?php echo $result['BrandId']; ?></td>
							<td> <?php echo $result['Quantity']; ?></td>
							<td> <?php echo $result['Price']; ?></td>
							<td> <?php echo $result['TotalPrice']; ?></td>
							<td> <?php echo $result['FullPaid']; ?></td>
							<td> <?php echo $result['Due']; ?></td>
							<td> <?php echo $result['Payment']; ?></td>
						</tr>
					</tbody>

					<?php
					}
				}
				else{
					echo "failed to find";
				}
				}
					?>			
				</table>
			</div>
				
		</div>

	</div>

</div>
<!--  content end -->

	<!-- php -->


	<!-- php -->

	<?php


	class PurchaseSales{
	public function myPurchase(){
	include('../database/db_connection.php');
// here we retrive a sum of totalprice let as a sum varibale we store
	$query=mysqli_query($con,"select SUM(TotalPrice) as  purchase from Purchase ");
	$row=mysqli_num_rows($query);
	while($result=mysqli_fetch_array($query))
		{
		$purchasetotal=$result['purchase'];
		return	$purchasetotal;
	

		
		}
	}
		
	public function mySale(){
		include('../database/db_connection.php');
			$query=mysqli_query($con,"select SUM(TotalPrice) as  sale from Sale ");
			$row=mysqli_num_rows($query);
			while($result=mysqli_fetch_array($query))
				{
				$saletotal=$result['sale'];
				return $saletotal;
			}
			}
		}

	class NetProfit extends PurchaseSales {
	

		function profit($a,$b){
			$pur=$a;
			$sal=$b;
			$sub=$pur-$sal;
		  return $sub;
			}
		}

		$p = new NetProfit();
		$first=$p->myPurchase();
		$second=$p->mySale();	
		$p->profit($first,$second);


		function Sales(){
			include('../database/db_connection.php');
		$query=mysqli_query($con,"select * from Sale");
		$row=mysqli_num_rows($query);
		echo $row;
		
		}

		function Purchase(){
			include('../database/db_connection.php');
		$query=mysqli_query($con,"select * from Purchase");
		$row=mysqli_num_rows($query);
		echo $row;
		}

			function Product(){
				include('../database/db_connection.php');
			$query=mysqli_query($con,"select * from Product");
			$row=mysqli_num_rows($query);
			echo $row;
			}
		?>

	

	

</body>
</html>