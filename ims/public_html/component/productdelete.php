<?php


include('../database/db_connection.php');
$deleteid=$_GET['id'];
$sql="delete from product where ProductId='$deleteid'";
echo $sql;
$query=mysqli_query($con,$sql);
if($query){
	echo "delete successfull";
	// header('location:product.php');
}
else{
	echo "delete failed";
}




?>