<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<label>Name</label>
		<input type="name" name="name" placeholder="Enter Name"><br>
		<label>Address</label>
	<textarea name="address" cols="10" rows="3"></textarea><br>
		<label>Age</label>
		<input type="number" name="age" placeholder="Enter Age"><br>
		<label>Phone No.</label>
		<input type="number" name="mob" placeholder="Enter Mobile No."><br>
	<label>Upload Image</label>
		<input type="file" name="img" ><br>

<input type="submit" name="submit" value="Register">

	</form>
	</center>
	
</body>
</html>
<?php

	include 'conn.php';
	if(isset($_POST['submit']))
	{



	 $name=$_POST['name'];
	$address=$_POST['address'];
	$age=$_POST['age'];
	 $mob=$_POST['mob'];
	 
  	$img_name=$_FILES['img']['name'];
  	$img_size=$_FILES['img']['size'];
  	$img_tmp=$_FILES['img']['tmp_name'];
  	$img_type=$_FILES['img']['type'];
  	
  		
  	move_uploaded_file($img_tmp,"images/".$img_name);

	 $sql=("insert into form (name,address,age,mob,img) values ('$name','$address','$age','$mob','$img_name')");

	$result=mysqli_query($con,$sql);
	if(!$result){
	echo 'no ';
}
else{
	echo 'register';	
}

} 	
 ?>