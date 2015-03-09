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
		<div class="row">
			<div class="col-md-8 main-content">
			<div class="row">
				<div class="col-md-3 hud">
				<h3 class="hud-title">Sample Title</h3>
				<p class="hud-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<small class="hud-user">Random User</small>
				<small class="hud-date">May 14</small>
			</div>
			<div class="col-md-3 hud"></div>
			<div class="col-md-3 hud"></div>
			</div>
			<div class="row">
				<div class="col-md-3 hud">
				<h3 class="hud-title">Sample Title</h3>
				<p class="hud-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<small class="hud-user">Random User</small>
				<small class="hud-date">May 14</small>
			</div>
			<div class="col-md-3 hud"></div>
			<div class="col-md-3 hud"></div>
			</div>
			<div class="row">
				<div class="col-md-3 hud">
				<h3 class="hud-title">Sample Title</h3>
				<p class="hud-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<small class="hud-user">Random User</small>
				<small class="hud-date">May 14</small>
			</div>
			<div class="col-md-3 hud"></div>
			<div class="col-md-3 hud"></div>
			</div>
		</div>
		<div class="col-md-4 sub-content">
			<a href="#" class="btn btn-primary">Post a new topic</a>
		</div>
		</div>
	</div>
</body>