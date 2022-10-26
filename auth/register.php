
<?php 
include('../db.php');
if(isset($_POST))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$photo=$_FILES['photo']['name'];
	//$photo=$_FILES['photo']['type'];
	//$photo=$_FILES['photo']['size'];
	//echo $photo;
	$tmp=$_FILES['photo']['tmp_name'];

	if($photo){
		move_uploaded_file($tmp, "../img/$photo");
	}else{
		$photo="empty1.png";
	}
	
	$address=$_POST['address'];
	//$hash_password=hash('md5',$password);//encryption password using hash method (md5 algorithm)
	//echo $hash_password;
	$gender=$_POST['gender'];
	//echo $gender;

	$sql=mysqli_query($conn,"SELECT * FROM user WHERE name='$name'");
	//echo mysqli_num_rows($sql);//show the number of row that u write query.
	if(mysqli_num_rows($sql)>0){
		echo '<script>alert ("Username already exit!");location.href="../index.php";</script>';//redirect location
	}else if($password==$cpassword){
		mysqli_query($conn,"INSERT INTO user (name,password,cpassword,email,phone,dob,gender,photo,address,created_date,modified_date) VALUES ('$name','$password','$cpassword','$email','$phone','$dob','$gender','$photo','$address',now(),now())");
		echo '<script>alert ("Successfully register.Please login!");location.href="../index.php";</script>';
	}
	else{
		echo '<script>alert ("Password do not match!");location.href="../index.php";</script>';
	}

	// 

}

 ?>