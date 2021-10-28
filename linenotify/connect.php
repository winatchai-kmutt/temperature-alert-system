<?php
$dbname = 'linenotify';
$dbuser = 'root';  
$dbpass = '12345678'; 
$dbhost = 'localhost'; 

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Database Success!<br><br>";
   
?>