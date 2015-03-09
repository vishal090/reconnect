<?php
$search_output = "";

$sqlCommand = "SELECT id, username FROM users WHERE location LIKE 'blr'";
include_once("connect_to_mysql.php");
        $query = mysql_query($sqlCommand) or die(mysql_error());
	$count = mysql_num_rows($query);
	if($count > 1){
		$search_output .= "<hr />$count results for <strong>Bangalore</strong><hr />$sqlCommand<hr />";
		while($row = mysql_fetch_array($query)){
	            $id = $row["id"];
		    $username = $row["username"];
		    $search_output .= "location: $id - $username<br />";
                } // close while loop
	} else {
		$search_output = "<hr />0 results for <strong>Bangalore</strong><hr />$sqlCommand";
	}
?>
<div>
<?php echo $search_output; ?>
</div>