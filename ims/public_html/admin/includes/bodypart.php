
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
					<h3>Sales</h3>
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
					<h2>Order Process</h2>
					<a href="#">View All</a>
				</div>
				<table>
						<thead>
							<tr>
								<td>Order Id</td>
								<td>Order Date</td>
								<td>Customer Name</td>
								<td>Product Id</td>
								<td>Category Id</td>
								<td>Brand Id</td>
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
			
			$query=mysqli_query($con,"select * from orders");
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
					?>			
				</table>
			</div>
				<div class="new-customer">
					<div class="title">
						<h2>Customer</h2>
						<a href="#">View All</a>

					</div>
					<table>
						<thead>
							<tr>
								<td>Id</td>
								<td>Name</td>
							
							</tr>
							
						</thead>
						<tbody>
							<tr>
								<td>Order Id</td>
								<td>Order Date</td>
							
							</tr>
						</tbody>
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

	

	