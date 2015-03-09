<?php
if (isset($_GET['id']) && isset($_GET['u']) && isset($_GET['e']) && isset($_GET['p1'])) {
	//connect to database and sanitize incoming $_GET variables
	include_once("db.php");
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']);
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
	$e = mysqli_real_escape_string($db, $_GET['p1']);
	//Evaluate the length of the incomong $_GET variables
	if($id == "" || strlen($u) < 3 || strlen($e) < 5 || strlen($p1) != 74){
		//log this issue into a text file and email details to yourself
		header("location: message.php?msg=activation_string_length_issues");
		exit();

	}
	//check their credentials against the database
	$sql = "SELECT * FROM users WHERE id='$id' AND username='$u' AND email='$e' AND password='$p' LIMIT 1";
	$query = mysqli_query($db, $sql);
	$numrows = mysqli_num_rows($query);
	//Evaluate for a match in the system
	if($numrows == 0) {
		//Log this potential hack attempt to text file and email details to yourself
		header("location: message.php?msg=Your credentials are not matching to anything in our system");
		exit();
	}
	//Match was found you can activate them
	$sql = "UPDATE users SET activated='1' WHERE id='$id' LIMIT 1";
	$query = mysqli_query($db, $sql);
	//Optional double check to see if activated in fact now = 1
	$sql = "SELECT * FROM users WHERE id='$id' AND activated='1' LIMIT 1";
	$query = mysqli_query($db, $sql);
	$numrows = mysqli_num_rows($query);
	//evaluate the double check
	if($numrows == 0){
		//log this issue of no switch of activation field to 1
		header("location: message.php?msg=activation_failure");
		exit();
	} else if($numrows == 1){
		//great everything went fine with activation!
		header("location: message.php?msg=activation_success");
		exit();
	} 
} else {
	//log this issue of missing initial $_GET variables
	header("location: message.php?msg=missing_GET_variables");
	exit();

}
