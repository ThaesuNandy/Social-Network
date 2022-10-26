<?php 
include('../db.php');
if(isset($_POST)){
	$id=$_POST['id'];
	$title=str_replace("'", "\'", $_POST['title']);
	$description=str_replace("'", "\'", $_POST['description']);
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	$old_photo=$_POST['old_photo'];
	$delete_photo=$_POST['delete_photo'];
	if($photo){
		unlink("../img/".$old_photo);
		$ext=pathinfo($photo,PATHINFO_EXTENSION);
		$photo=uniqid().".".$ext;
		move_uploaded_file($tmp,"../img/$photo");
		mysqli_query($conn,"UPDATE post SET title='$title',description='$description',post_photo='$photo',modified_date=now() WHERE id='$id'");
	}else if($delete_photo){
		unlink("../img/".$delete_photo);
		mysqli_query($conn,"UPDATE post SET title='$title',description='$description',post_photo='',modified_date=now() WHERE id='$id'");
	}

	else{
		mysqli_query($conn,"UPDATE post SET title='$title',description='$description',modified_date=now() WHERE id='$id'");
	}
	header("location:../home.php");
}

 ?>
