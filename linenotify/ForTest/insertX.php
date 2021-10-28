
<?php
require('connect.php');
$st   = $_POST['Status Temp']; // ตัวอย่าง ถ้าไม่มี _ ข้อมูลเป็น 0 55555555555555555
$sh	  = $_POST['Status Hum'];
$query = "INSERT INTO `changing`  (statusTemp,statusHum) VALUES ('$st', '$sh');";
$result = mysqli_query($connect,$query) or die("Error Query [" . $query . "]");
?>