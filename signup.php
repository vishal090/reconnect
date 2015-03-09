<?php
session_start();
//If user is logged in, header them away
if(isset($_SESSION["username"])){
	header("location: message.php?msg=NO to that weenis");
	exit();
}
?>
<?php
//Ajax calls this NAME CHECK code to execute
if(isset($_POST["usernamecheck"])){
	include_once("db.php");
	$username = preg_replace('#[^a-z0-9]#i', '', $_POST['usernamecheck']);
	$sql = "SELECT id FROM users WHERE username='$username' LIMIT 1";
	$query = mysqli_query($db, $sql);
	$uname_check = mysqli_num_rows($query);
	if (strlen($username) < 3 || strlen($username) > 16) {
		echo '<strong style="color:#F00;">3-16 characters please</strong>';
		exit();
	}
	if (is_numeric($username[0])){
		echo '<strong style="color:#F00;">Username must begin with a letter</strong>';
		exit();
	}
	if ($uname_check < 1) {
		echo '<strong style="color:#009900;">' . $username . ' is OK</strong>';
		exit();
	} else {
		echo '<strong style="color:#F00;">' . $username . ' is taken</strong>';
		exit();
	}
}

?><?php 
//Ajax calls this registration code to execute
if(isset($_POST["u"])){
	//connect to the database
	include_once("db.php");
	//gather the posted data into local variables
	$u = preg_replace('#[^a-z0-9]#i', '', $_POST['u']);
	$e = mysqli_real_escape_string($db, $_POST['e']);
	$p1 = $_POST['p1'];

	$sql = "SELECT id FROM users WHERE username='$u' LIMIT 1";
	$query = mysqli_query($db, $sql);
	$u_check = mysqli_num_rows($query);

	$sql = "SELECT id FROM users WHERE email='$e' LIMIT 1";
	$query = mysqli_query($db, $sql);
	$e_check = mysqli_num_rows($query);

	if($u == "" || $e == "" || $p1 == ""){
		echo "Fill in the form details";
		exit();
	} else if ($u_check > 0) {
		echo "The username you entered is already taken";
		exit();
	} else if ($e_check > 0) {
		echo "That email address is already in use in the system";
		exit();
	} else if (strlen($u) < 3 || strlen($u) > 16) {
		echo "Username must be between 3 and 16 characters";
		exit();
	} else {
		//end FORM DATA ERROR HANDLING
		//begin insertion of data into the database
		//hash the password and apply your own mysterious unique salt
		$cryptpass = md5($p1);
		include_once ("randStrGen.php");
		$p1_hash = randStrGen(20)."$cryptpass".randStrGen(20);
		//add user info into the database table for the main site table
		$sql = "INSERT INTO users (username, email, pass)VALUES('$u','$e','$p1_hash')";
		$query = mysqli_query($db, $sql);
		$uid = mysqli_insert_id($db);

	}

	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
	<link rel="stylesheet" href="assets/css/style.css">
<style type="text/css">
	#signupform {
		margin-top:	24px;
	}
	#signupform > div {
		margin-top:	12px;
	}
	#signupform > input {
		width:	200px;
		padding: 3px;
		background: #F3F9DD;
	}
	#signupbtn {
		font-size:	18px;
		padding:	12px;
	}
	#terms {
		border: #CCC 1px solid;
		background:	#F5F5F5;
		padding: 12px;
	}
</style>	
	<script src="assets/js/main.js"></script>
	<script src="assets/js/ajax.js"></script>
<script>
	function restrict(elem){
		var tf = _(elem);
		var rx = new RegExp;
		if(elem == "email"){
			rx = /[' "]/g;
		} else if(elem == "username") {
			rx = /[^a-z0-9]/gi;
		}
		tf.value = tf.value.replace(rx, "");
	}
	function emptyElement(x){
		_(x).innerHTML = "";
	} 
	function checkusername(){
		var u = _("username").value;
		if(u!= ""){
			_("unamestatus").innerHTML = 'checking ...';
			var ajax = ajaxObj("POST", "signup.php");
			ajax.onreadystatechange = function() {
				if(ajaxReturn(ajax) == true){
					_("unamestatus").innerHTML = ajax.responseText;

				}
			}
			ajax.send("usernamecheck="+u);
		}
	}
	function signup(){
		var u = _("username").value;
		var e = _("email").value;
		var p1 = _("pass").value;
		var p2 = _("pass2").value;
		var status = _("status");
		if(u == "" || e == "" || p1 == "" || p2 == ""){
			status.innerHTML = "Fill out all of the form data";
		} else if(p1 != p2){
			status.innerHTML = "Your password fields do not match";
		} else if(_("terms").style.display == "none"){
			staus.innerHTML = "Please view the link";
		} else {
			_("signupbtn").style.display = "none";
			status.innerHTML = 'please wait ...';
			var ajax = ajaxObj("POST", "signup.php");
			ajax.onreadystatechange = function() {
				if(ajaxReturn(ajax) == true){
					if(ajax.responseText != "signup_success"){
						status.innerHTML = ajax.responseText;
						_("signupbtn").style.display = "block";
					} else {
						window.scrollTo(0,0);
						_("signupform").innerHTML = "OK "+u+", check your email inbox at <u>"+e+"</u> and click on the link to activate your account."
					}
				}
			}
			ajax.send("u="+u+"&e="+e+"&p1="+p1);

		}
	}
	function openTerms() {
		_("terms").style.display = "block";
		emptyElement("status");
	}
</script>
</head>
<body>
	<h3>Sign up Here</h3>
		<form name="signupform" id="signupform" onsubmit="return false">
				<div>Username: </div>
					<input id="username" type="text" onblur="checkusername()" onkeyup="restrict('username')" maxlength="16">
						<span id="unamestatus"></span>
				<div>Email: </div>
					<input id="email" type="text" onfocus="emptyElement('status')" onkeyup="restrict('email')" maxlength="100">
				<div>Password: </div>
					<input id="pass" type="password" onfocus="emptyElement('status')" maxlength="16">
				<div>Confirm Password: </div>
					<input id="pass2" type="password" onfocus="emptyElement('status')" maxlength="16">
				<div>
 					<a href="#" onclick="return false" onmousedown="openTerms()">
 	   					Register at your own risk
 	   				</a>
				</div>
				<div id="terms" style="display:none;">
		<h3>Alumni Interaction terms of use</h3>
			<p>1. Respect the admin.</p>
			<p>2. Credit some amount to this account no-50077995164 to show some respect.</p>
			<p>3. Don't go to college.</p>
				</div>
				<br /><br />
				<button id="signupbtn" onclick="signup()">Create Account</button>
					<span id="status"></span>
		</form>
</body>