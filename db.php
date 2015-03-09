<?php

$db = mysqli_connect("localhost", "root", "way2hell", "recon");
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
	exit();
}
return $db;

?>