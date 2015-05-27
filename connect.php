
<?php
$hostname="localhost"; 
$username="producthub";  
$password="mohammad123";
$database="producth_main"; 
$con=mysql_connect($hostname,$username,$password);
if(! $con)
	{
	die('Connection Failed'.mysql_error());
	}

mysql_select_db($database,$con);
?>
