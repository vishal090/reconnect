<?php
$message ="No message";
$msg = preg_replace('#[^a-z 0-9.:_()]#i', '', $_GET['msg']);
if($msg == "activation_failure"){
	$message = '<h2>Activation error</h2>Sorry your account is not been activated.Something went wrong';
} else if($msg == "activation_success"){
	$message = '<h2>Activation Success</h2>Your account is now activated.<a href="index.php">Click here to log in</a>';
} else {
	message = $msg;
}
?>

<div><?php echo $message; ?></div>