<?php 
include('db.php');
if(isset($_POST['post_id']))
{
	$id=$_POST['post_id'];
$comment_sql=mysqli_query($conn,"SELECT comment.*,user.name,user.photo FROM comment INNER JOIN user ON comment.user_id=user.id WHERE comment.post_id='$id'");
						while($comment=mysqli_fetch_assoc($comment_sql)){
							echo ' <div class="media mb-2">
			  						<div class="media-left">
			    					<img src="img/'.$comment['photo'].'" class="media-object rounded-circle m-2" width="35px" height="35px">
			  						</div>
			  						<div class="media-body">
			  						<h6 class="font-weight-bold">'.$comment['name'].'</h6>
			    					<p>'.$comment['comment'].'</p>
			  						</div>
									</div>';


						}
					}

 ?>