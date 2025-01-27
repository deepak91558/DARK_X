<?php 

$dbhost = 'localhost';
$dbuser = 'Database_Username';
$dbpass = 'Database_Password';
$db = 'Database_Name';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 

date_default_timezone_set('Asia/Jakarta');

if (mysqli_connect_error()){
	echo "Database Connection Failed :". mysqli_connect_error();
}

?>