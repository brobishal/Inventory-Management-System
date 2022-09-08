<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form method="POST" action="pdf.php">
	<label>Invoice Id</label>
	<select name="invoice">
		<option><?php
		include('database/db_connection.php');
		$sql=mysqli_query($con,"select * from invoice");
		while($data=mysqli_fetch_array($sql)){
			echo $data['InvoiceId'];
		}


		?>
		</option>
	</select>
</form>
	
</body>
</html>


<?php

include('database/db_connection.php');


?>