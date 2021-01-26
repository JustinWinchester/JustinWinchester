<?php
	if(isset($_POST['submit']))
	{
		$msg = 'Name:      '.$_POST['name']."\n"
			  . 'Email:    '.$_POST['email']."\n"
			   . 'Comment: '.$_POST['comment'];
		$recipient = "jw925682@cameron.edu";
		$subject = "Contact Form";
			mail($recipient, $subject, $msg);
		    header("Location: thankyou.php");
		    
	}
	?>
