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