<?php 
include('../db.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql=mysqli_query($conn,"SELECT post_photo FROM post WHERE id='$id'");
	$post=mysqli_fetch_assoc($sql);
	unlink("../img/".$post['post_photo']);
	mysqli_query($conn,"DELETE FROM post WHERE id='$id'");
	mysqli_query($conn,"DELETE FROM like_data WHERE post_id='$id'");
	mysqli_query($conn,"DELETE FROM comment WHERE post_id='$id'");
	header("location:../home.php");
 }

 ?>