
<?php
$servername = "localhost";
$username = "producthub";
$password = "mohammad123";
$dbname = "producth_main";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
