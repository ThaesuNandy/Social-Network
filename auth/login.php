<?php 
include('../db.php');
date_default_timezone_set('Asia/Yangon');
$time=time();//time show in seconds
if(isset($_POST['name']) && isset($_POST['password'])){
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sql=mysqli_query($conn,"SELECT * FROM user WHERE name='$name' AND password='$password'");
	$row=mysqli_fetch_assoc($sql);
	if(mysqli_num_rows($sql)>0)
	{
		include ('../vendor/autoload.php');
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

		session_start();//server ပေါ်မှာ id သိမ်းဖို့/ connection မရှိ တဲ့ တခြားfile ကနေ ခေါ်သုံးချင်လို့ 
		$_SESSION['id']=$row['id'];
		$_SESSION['login_date']=date('Y-m-d h:i:s');
		mysqli_query($conn,"INSERT INTO online_user (user_id,active_date,login_date) VALUES ('".$_SESSION['id']."','$time','".$_SESSION['login_date']."')");
		header("location:../home.php");
	}else {
		echo '<script>alert ("Login Fail! Try again.");location.href="../index.php";</script>';
	}
}

 ?>