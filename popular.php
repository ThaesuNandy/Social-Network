<div class="alert bg-white pop">
				<b>Popular Posts/Authors</b><hr>
				<?php 
				$pop_sql=mysqli_query($conn,"SELECT post_id FROM like_data");
				$a="";
				while($pop=mysqli_fetch_assoc($pop_sql)){
					$a.=$pop['post_id'].",";
					}
					$b=substr($a, 0,-1);
					$c=explode(",", $b);
					$d=array_count_values($c);
					arsort($d);
					$e=array_keys($d);
					$f=array_slice($e, 0,3);
					foreach ($f as $key => $value) {
						$popular_sql=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id WHERE post.id='$value'");
						$popular=mysqli_fetch_assoc($popular_sql);
				
				 ?>


			<div class="media border mb-2">
				<a href="" class="card-link text-dark">
			  <div class="media-left">
			    <img src="img/<?php echo $popular['post_photo']; ?>" class="media-object my-2 ml-2" width="120px">
			  </div>
			  <div class="media-body ml-2">
			    <h6 class="media-heading mt-3"><?php echo $popular['title']; ?></h6>
			    <small><?php echo substr($popular['description'], 0,100); ?></small></a><br>

			    <a href="" class="text-dark"><small>Posted by : <b><?php echo $popular['name']; ?></b></small>
			    <img src="img/<?php echo $popular['photo']; ?>" class="rounded-circle float-right mr-2 mb-1" width="30px" height="30px">
			    </a>
			  </div>
			</div>
			<?php 	} ?>

</div>