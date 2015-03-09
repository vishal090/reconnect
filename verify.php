<?php
session_start();
require 'db.php';
$username = $_POST['username'];
$pass = md5($_POST['password']);
$query= "SELECT * FROM users WHERE username='".$username."';";
$con = mysqli_query($db, $query);
$row = mysqli_fetch_array($con);
if($row['username']==$username && $row['pass']==$pass){
	$_SESSION['user']=$row['username'];
	$_SESSION['fname']=$row['fname'];
	$_SESSION['lname']=$row['lname'];
}
header("Location:./home/");
?>