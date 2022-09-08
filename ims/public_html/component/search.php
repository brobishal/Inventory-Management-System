	<!-- display product table -->
	<h1>Product Details</h1>
<?php 
if(isset($_POST['search'])){
	$value=$_POST['name'];
	$val="SELECT * FROM product WHERE ProductName LIKE '%$value%' or
	 ProductId LIKE '%$value%' or ProductPrice LIKE '%$value%' or 
	 CategoryId LIKE '$value' or BrandId LIKE '$value'";
	 $check=mysqli_query($con,$val);
	 if(mysqli_num_rows($check)>0){
		 while($res=mysqli_fetch_array($check)){
			  
			echo $res[''];
		 }
	 }
	 else{
		 echo "no";
	 }


	echo $val;
	// $select="select * from Product where name like '% $searchkey%'";
}

?>