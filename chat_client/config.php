<?
ini_set("display_errors","on");
if(!isset($dbh)){
 session_start();
 date_default_timezone_set("UTC"); // Set Time Zone
 $host = "localhost"; // Hostname
 $port = "3306"; // MySQL Port : Default : 3306
 $user = "producthub"; // Username Here
 $pass = "mohammad123"; //Password Here
 $db   = "producth_main"; // Database Name
 $dbh  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port,$user,$pass);
 
 /*Change The Credentials to connect to database.*/
 include("user_online.php");
}
?>
