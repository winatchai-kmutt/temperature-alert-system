<?php
// ดึง Num temp&hum ล่าสุด
$last_idTH = "SELECT MAX(Num) AS maxid FROM weather"; // query อ่านค่า id สูงสุด
$THresult = mysqli_query($connect, $last_idTH); // ทำคำสั่ง
$retTH = mysqli_fetch_assoc($THresult); // อ่านค่า
$last_idTH = $retTH['maxid']; // คืนค่า id ที่ insert สูงสุด
echo "lastIDTH = $last_idTH";
echo '<br>';
// ดึง Num Status ล่าสุด
$last_id = "SELECT MAX(Num) AS maxid FROM changing"; // query อ่านค่า id สูงสุด
$result = mysqli_query($connect, $last_id); // ทำคำสั่ง
$ret = mysqli_fetch_assoc($result); // อ่านค่า
$last_id = $ret['maxid']; // คืนค่า id ที่ insert สูงสุด
echo "lastID = $last_id";
echo '<br>';

//คำสั่ง เลือก temp and hum ที่ num ล่าสุด
$sqlWeather = "SELECT * FROM weather WHERE Num =  $last_idTH"; 
$THQuery = mysqli_query($connect, $sqlWeather) or die("Error Query [" . $sql . "]");
//คำสั่ง เลือก status ที่ num ล่าสุด
$sqlCh ="SELECT * FROM changing WHERE Num = $last_id";
$objQuery = mysqli_query($connect, $sqlCh) or die("Error Query [" . $sql . "]");

while ($objResult = mysqli_fetch_array($objQuery)) {  
    /* ต้องเปลี่ยนรูปของข้อมูลเป็น ลิส ดังนั้นจึงใช้ Fetch ข้อมูลจากฐานข้อมูลมาเก็บไว้ใน List ของ Array
    ต้องใช้คู่กับ while และต้องทำงงานในลูบ*/
    $STemp = $objResult['statusTemp']; // ดึงค่าstatus แทนตัวแปล
    $SHum = $objResult['statusHum'];
    echo "status of temp is $STemp";
    echo '<br>';
    echo "status of hum is $SHum";
    echo '<br>';
}

?>