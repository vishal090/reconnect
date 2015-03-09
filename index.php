<?php
session_start();
if(isset($_SESSION['user'])){
	header("Location:./home");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reconnect</title>
	<meta name="viewport" content="width=device width, initial scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<script src="assets/js/jq.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 class="text-center">Reconnect</h1>
		</div>
		<div class="row"  id="login-form">
			<form class=" text-center form-inline" action="verify.php" method="POST">
				<div class="form-group">
					<input class="form-control" type="username" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<input class="form-control"type="password" name="password" placeholder="Password">
				</div>
				<input class="btn btn-primary"type="submit" value="Login">
			<a id="new-btn" class ="btn btn-default" href="signup.php">Register</a>
			</form>
		</div>
		
	</div>
</body>