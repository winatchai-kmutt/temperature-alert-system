<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<?php
require('connect.php');

$st   = $_REQUEST['Status_Temp'];
$sh	  = $_REQUEST['Status_Hum'];

$sql = "INSERT INTO `changing` (statusTemp , statusHum) VALUES ('$st', '$sh');";

$objQuery = mysqli_query($connect, $sql);

if ($objQuery) {
	echo "New record Inserted successfully";
} else {
	echo "Error : Input";
}

mysqli_close($connect); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>