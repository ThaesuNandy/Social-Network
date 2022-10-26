<?php 
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

 ?>