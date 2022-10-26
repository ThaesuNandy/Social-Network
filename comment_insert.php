<?php 
include ('db.php');
session_start();
if(isset($_POST['comment']) && isset($_POST['post_id'])){
	include ('vendor/autoload.php');
	$options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'ba8d7c268b9013545fcb',
    'f44dddbef5979a06f94a',
    '1489181',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);

	$comment=$_POST['comment'];
	$post_id=$_POST['post_id'];
	mysqli_query($conn,"INSERT INTO comment (comment,post_id,user_id,created_date,modified_date) VALUES ('$comment','$post_id','".$_SESSION['id']."',now(),now())");
}

 ?>