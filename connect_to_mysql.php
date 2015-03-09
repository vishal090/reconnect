<?php
/* -------------------------------------------------------------------
Script written by Adam Khoury @ www.developphp.com
                          January 1, 2010
Please retain this credit when displaying this code online 
---------------------------------------------------------------------- */
// Place db host name. Sometimes "localhost" but  
// sometimes looks like this: >>      ???mysql??.someserver.net 
$db_host = "localhost"; 
// Place the username for the MySQL database here 
$db_username = "root";  
// Place the password for the MySQL database here 
$db_pass = "way2hell";  
// Place the name for the MySQL database here 
$db_name = "recon"; 

// Run the connection here  
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql"); 
mysql_select_db("$db_name") or die ("no database");    

?>