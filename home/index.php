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
	<script src="../assets/js/jq.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<script>
$(document).ready(function{
});
</script>
<body style="background-color:#f2f2f2;">
	<?php include_once("../assets/template/template_navbar.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form action="post.php" >
				<div class="form-group">
					<textarea style="resize:none;" name="" id="" cols="20" rows="4" class="form-control"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Post</button>
			</form>
			<hr>
			<div class="white-container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2 profile-pic">
							<img src="../assets/img/dp.png" alt="" class="thumbnail" style="width:100px;">
						</div>
						<div class="col-md-10 update-text">
							<h4 class="text-primary">Fname Lname <small>shared some random post</small>
								<a href="" class="fa fa-fw fa-cog" style="float:right;"></a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt soluta, 
								eveniet placeat maiores commodi perspiciatis animi ad, eum aliquam ipsa 
								modi quam exercitationem, ratione quae vero laborum officia voluptate? 
								Minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ut 
								excepturi voluptatum dolor blanditiis ab accusantium adipisci quia eveniet, 
								dolores expedita labore sapiente a, corporis cupiditate vitae officiis sequi 
								suscipit?
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="white-container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2 profile-pic">
							<img src="../assets/img/dp.png" alt="" class="thumbnail" style="width:100px;">
						</div>
						<div class="col-md-10 update-text">
							<h4 class="text-primary">Fname Lname <small>shared some random post</small>
								<a href="" class="fa fa-fw fa-cog" style="float:right;"></a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt soluta, 
								eveniet placeat maiores commodi perspiciatis animi ad, eum aliquam ipsa 
								modi quam exercitationem, ratione quae vero laborum officia voluptate? 
								Minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ut 
								excepturi voluptatum dolor blanditiis ab accusantium adipisci quia eveniet, 
								dolores expedita labore sapiente a, corporis cupiditate vitae officiis sequi 
								suscipit?
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="white-container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2 profile-pic">
							<img src="../assets/img/dp.png" alt="" class="thumbnail" style="width:100px;">
						</div>
						<div class="col-md-10 update-text">
							<h4 class="text-primary">Fname Lname <small>shared some random post</small>
								<a href="" class="fa fa-fw fa-cog" style="float:right;"></a>
							</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt soluta, 
								eveniet placeat maiores commodi perspiciatis animi ad, eum aliquam ipsa 
								modi quam exercitationem, ratione quae vero laborum officia voluptate? 
								Minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ut 
								excepturi voluptatum dolor blanditiis ab accusantium adipisci quia eveniet, 
								dolores expedita labore sapiente a, corporis cupiditate vitae officiis sequi 
								suscipit?
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4" ></div>
	</div>
</div>
</body>