<?php
session_start();
if(empty($_SESSION)){
	header("Location:../");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reconnect</title>
	<meta name="viewport" content="width=device width, initial scale=1">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="index-style.css">
	<script src="../assets/js/jq.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#f2f2f2;">
	<?php include_once("../assets/template/template_navbar.php"); ?>
	<div class="container">
		<ul class="nav nav-tabs">
		<li role="presentation" class="active"><a href="#">Jobs</a></li>
		<li role="presentation"><a href="#">Referrals</a></li>
		<li role="presentation"><a href="#">Post a job</a></li>
	</ul>
	</div>
</body>