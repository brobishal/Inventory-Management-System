<?php


include('../database/db_connection.php');
$deleteid=$_GET['id'];
$sql="delete from purchase where PurchaseId='$deleteid'";
echo $sql;
$query=mysqli_query($con,$sql);
if($query){
	echo "delete successfull";
	header('location:purchase.php');
	echo "<script>alert('successfully delete');</script>";
}
else{
	echo "delete failed";
}




?>