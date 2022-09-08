<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
select Invoice:
	<form method="POST" action="">
		<div>
			<select name="invoice">
			<!-- show the customer id list   -->
		
			</select>

		</div>
		<input type="submit" value="Genearte">
	</form>
</body>
</html>


<?php
			include('database/db_connection.php');
				$query=mysqli_query($con,"select * from Customer");
				while($result=mysqli_fetch_array($query)){
					echo "<option value='".$result['CustomerId']."'>".$result['CustomerId']."</option>";
				}

			?>