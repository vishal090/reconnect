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
	<div class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="custom-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="" class="navbar-brand">Reconnect</a>
			</div>
			<div class="collapse navbar-collapse" id="custom-navbar">
				<ul class="nav navbar-nav">
					<li><a href="../home">Home</a></li>
					<li><a href="../college">College</a></li>
					<li class="active"><a href="">Jobs</a></li>
					<li><a href="../events">Events</a></li>
					<li><a href="../search">Search</a></li>
					<li><a href="../discussion">Discussion</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle navbar-btn" type="button" id="profile-dropdown" data-toggle="dropdown" aria-expanded="true"><?php echo $_SESSION['fname']; echo " ".$_SESSION['lname']." "; ?><span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="profile-dropdown">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profile</a></li>
							<li role="presentation"><a href="../logout.php" role="menuitem" tabindex="-1" href="#">Logout</a></li>
						</ul>
					</div>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<ul class="nav nav-tabs">
		<li role="presentation" class="active"><a href="#">Jobs</a></li>
		<li role="presentation"><a href="#">Referrals</a></li>
		<li role="presentation"><a href="#">Post a job</a></li>
	</ul>
	</div>
</body>