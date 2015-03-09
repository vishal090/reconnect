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
	<link rel="stylesheet" href="../assets/css/custom.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="../assets/js/jq.js"></script>
	<script src="../assets/js/custom.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#f2f2f2;">
	<?php include_once("../assets/template/template_navbar.php"); ?>
	<div class="container">
		<ul class="nav nav-tabs">
			<li id="college-profession-tab" role="presentation" class="active"><a class="profession-tab" href="#">Profession</a></li>
			<li id="college-location-tab" role="presentation"><a class="location-tab" href="#">Location</a></li>
			<li id="college-batch-tab" role="presentation"><a class="batch-tab" href="#">Batch</a></li>
		</ul>
		<div class="gap"></div>
		<div class="container location-container hide">
			<div class="row">
				<div class="col-sm-3 hud">
					<a class="something" href="location.php">
					<div class="hud-title">
						<h3>Bengaluru</h3>
					</div>
					<div class="hud-info">
						<p><?php $sqlCommand = "SELECT id, username FROM users WHERE location LIKE 'blr'";
							include_once("connect_to_mysql.php");
        						$query = mysql_query($sqlCommand) or die(mysql_error());
								$count = mysql_num_rows($query);
								echo $count; 
							?>
						</p>
					</div>
				</a>
				</div>
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>Mumbai</h3>
					</div>
					<div class="hud-info">
						<p><?php $sqlCommand = "SELECT id, username FROM users WHERE location LIKE '%Mumbai%'";
							include_once("connect_to_mysql.php");
        						$query = mysql_query($sqlCommand) or die(mysql_error());
								$count = mysql_num_rows($query);
								echo $count;
							?>
						</p>
					</div>
				</a>
				</div>
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>New Delhi</h3>
					</div>
					<div class="hud-info">
						<p><?php $sqlCommand = "SELECT id, username FROM users WHERE location LIKE '%New Delhi%'";
							include_once("connect_to_mysql.php");
        						$query = mysql_query($sqlCommand) or die(mysql_error());
								$count = mysql_num_rows($query);
								echo $count;
							?>
						</p>
					</div>
				</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>Chennai</h3>
					</div>
					<div class="hud-info">
						<p><?php $sqlCommand = "SELECT id, username FROM users WHERE location LIKE '%Chennai%'";
							include_once("connect_to_mysql.php");
        						$query = mysql_query($sqlCommand) or die(mysql_error());
								$count = mysql_num_rows($query);
								echo $count;
							?>
						</p>
					</div>
				</a>
				</div>
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>Kanpur</h3>
					</div>
					<div class="hud-info">
						<p>37</p>
					</div>
				</a>
				</div>
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>Lucknow</h3>
					</div>
					<div class="hud-info">
						<p>31</p>
					</div>
				</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>New Delhi</h3>
					</div>
					<div class="hud-info">
						<p>28</p>
					</div>
				</a>
				</div>
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>Jaipur</h3>
					</div>
					<div class="hud-info">
						<p>25</p>
					</div>
				</a>
				</div>
				<div class="col-sm-3 hud">
					<a class="something" href="#">
					<div class="hud-title">
						<h3>Dehradun</h3>
					</div>
					<div class="hud-info">
						<p>21</p>
					</div>
				</a>
				</div>
			</div>
		</div>
	</div>
</body>