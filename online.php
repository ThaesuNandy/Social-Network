<?php 
include('db.php');
session_start();
$time=time();
mysqli_query($conn,"UPDATE online_user SET active_date='$time' WHERE user_id='".$_SESSION['id']."' AND login_date='".$_SESSION['login_date']."'");
$online_sql=mysqli_query($conn,"SELECT online_user.*, user.name,user.photo FROM online_user INNER JOIN user ON online_user.user_id=user.id WHERE online_user.active_date > '$time'-5 GROUP BY online_user.user_id");
$online_count=mysqli_num_rows($online_sql);
$data="";
$data.='<li class="list-group-item"><i class="fas fa-circle text-danger" style="font-size:12px;"></i> <b>Active Users</b> <span class="badge badge-info">'.$online_count.'</span></li>
';
while($online=mysqli_fetch_assoc($online_sql)){
	$data.='<li class="list-group-item border-top-0 border-bottom-0"><img src="img/'.$online['photo'].'" class="rounded-circle" width="35px" > '.$online['name'].'</li>
';
}
echo $data;

 ?>