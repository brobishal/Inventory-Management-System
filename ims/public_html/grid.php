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

			.container{
				display:grid;
				grid-gap:20px;
				width:100%;
				height:100vh;
				grid-template-columns:1fr 1fr 1fr 1fr 1fr;
				grid-template-rows:70px 100px 1fr 1fr;
			}
			.header{
				grid-column:2/6;
				grid-row:1/2;
				background:#cccc;

			}
			.sidebar{
				grid-column:1/2;
				grid-row:1/5;
				background:#faa3;

			}
			.content1{
				grid-column:2/3;
				grid-row:2/3;
				background:#aeee3333;
			}
			.content2{
				grid-column:3/4;
				grid-row:2/3;
				background:black;
			}
			.content3{
				grid-column:4/5;
				grid-row:2/3;
				background:green;
			}
			.content4{
				grid-column:5/6;
				grid-row:2/3;
				background:red;
			}
			.content5{
				grid-column:2/6;
				grid-row:3/5;
				background:gray;
			}
			.footer{
				grid-column:1/6;
				grid-row:5/6;
				background:blue;
			}


	</style>
</head>
<body>
	<div class="container">
		<header class="header">
			header
		</header>
		<div class="sidebar">
			sidebar
		</div>
		<section class="content1">
		content1
		</section>
		<section class="content2">
		content2
		</section>
		<section class="content3">
		content3
		</section>
		<section class="content4">
		content4
		</section>
		<section class="content5">
		content5
		</section>
	
		<footer class="footer">	
		footer
		</footer>

		

	</div>
	
</body>
</html>