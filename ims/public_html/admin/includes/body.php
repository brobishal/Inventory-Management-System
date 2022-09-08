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
			box-sizing:border-box;
		}
		.carBox{
			display:grid;
			grid-template-columns:1fr 1fr 1fr 1fr;
			grid-template-rows:1fr 1fr;
			width:calc(100%-220px);
			height:100vh;
			left:220px;
			background:green;
		}
		.card1{

		}




	</style>
</head>
<body>

<div class="cardBox">
			<div class="card1">
			<div class="number">100</div>
			<div class="cardName">Inventory</div>
			<div class="iconBox">
			<i class="fas fa-warehouse"></i>
			</div>
			</div>

			<div class="card2">
			<div class="number">222</div>
			<div class="cardName">Purchase</div>
			
			<div class="iconBox">
			<i class="fas fa-shopping-bag"></i>
			</div>
			</div>

			<div class="card3">
			<div class="number">2000</div>
			<div class="cardName">Sales</div>
			<div class="iconBox">
			<i class="fab fa-sellcast"></i>
			</div>
			</div>


			<div class="card4">
					<div class="number">1000<?php 
					$p = new NetProfit();
					$first=$p->myPurchase();
					$second=$p->mySale();
					$p->profit($first,$second);
					?></div>
				<div class="cardName">Profit</div>
		
			<div class="iconBox">
			<i class="fas fa-plus"></i>
			</div>
			</div>
         </div>

</body>
</html>