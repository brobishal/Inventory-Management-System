


<?php
//getting the ip address of the user
$ip=$_SERVER['REMOTE_ADDR'];
echo "Your IP Address is".$ip;

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale.e">
	<meta http-equiv="x-UA-Compatible" content="ie=edge">
	<title>image upload</title>
</head>
<body>
<?php
if(isset($_POST['FileUpload']))
{
 //gathering image infromation
	$name=$_FILES['file']['name'];
	$size=$_FILES['file']['size'];
	$type=$_FILES['file']['type'];
	$tmpname=$_FILES['file']['tmp_name'];
	//uploading path
	$path="../uploads/";

	$filepath=$path.$name;

	//check the upload file for image and pdf only
	if($type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif"||$type=="image/png"||$type=="application/pdf")
{
	if(move_uploaded_file($tmpname,$filepath))
	{
		echo"file uploaded";

	}
	else{
		echo "something error";
	}
}
else
{
	echo "only accept image and pdf ";

}
} 

?>

<form method="POST"  name="uploading" action="" enctype="mutlipart/form-data">
	<fieldset>
		<legend>image upload</legend>
		<input type="file"  name="file">
		<input type="submit" name="fileUpload" value="Upload">
	</fieldset>
	
</form>

</body>
</html>