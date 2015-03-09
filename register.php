<?php
session_start();
require 'db.php';


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
$query= " INSERT INTO users (fname, lname, email, pass) VALUES ('".$fname."', '".$lname."', '".$email."', '".$password."');";
mysqli_query($dbLink, $query) or die("Error");



?>
