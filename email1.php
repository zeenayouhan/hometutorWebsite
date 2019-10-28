
<?php
set_time_limit(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CHECK EMAIL IS EXISTS LIVE OR NOT</title>
    </head>
    <body>
	
		<?php
		include_once 'email.php';
 
		//
		$email = $_REQUEST['email']; //pass an email here to test
		//
		
		$vmail = new verifyEmail();
		$vmail->setStreamTimeoutWait(20);
		$vmail->Debug= TRUE;
		$vmail->Debugoutput= 'html';
 
		$vmail->setEmailFrom('info.cloudevils@gmail.com');
 
		if ($vmail->check($email)) {
			echo '<h1>email &lt;' . $email . '&gt; exist!</h1>';
		} elseif (verifyEmail::validate($email)) {
			echo '<h1>email &lt;' . $email . '&gt; valid, but not exist!</h1>';
		} else {
			echo '<h1>email &lt;' . $email . '&gt; not valid and not exist!</h1>';
		}
		?>
    </body>
</html>
