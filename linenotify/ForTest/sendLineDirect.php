<?php
/*ต้องเอาข้อมูลล่าสุดมาประมวลผลเรื่อยๆ โดยtempและhum จะinsertเข้ามาเรื่อยๆ ถ้าเกินstatus จะแจ้งเตือนไลน์*/
            /* ดึง lasstID จาก weather*/
require('connect.php');                             //ไม่สามารถดึงข้อมูลที่อินพุดเข้ามาไว้ใช้ตลอดไม่ได้ เพราะไม่มีฐานข้อมูลเก็บไว้

        $last_idTH = "SELECT MAX(Num) AS maxid FROM weather"; // query อ่านค่า id สูงสุด
        $THresult = mysqli_query($connect, $last_idTH); // ทำคำสั่ง
        $retTH = mysqli_fetch_assoc($THresult); // อ่านค่า
        $last_idTH = $retTH['maxid']; // คืนค่า id ที่ insert สูงสุด
        echo "lastIDTH = $last_idTH";
        echo '<br>';

        $sqlWeather = "SELECT * FROM weather WHERE Num =  $last_idTH"; 
        $THQuery = mysqli_query($connect, $sqlWeather) or die("Error Query [" . $sql . "]");
        while ($THResult = mysqli_fetch_array($THQuery)){
                $Temp = $THResult['temp'];
                $Hum = $THResult['hum'];
                $st   = $_REQUEST['Status_Temp'];
                $sh	  = $_REQUEST['Status_Hum'];
                echo $st;
                echo $sh;

                if ($Temp > $STemp){
                    echo "Now temp = $Temp";
                    echo '<br>';
                    echo 'Now temp No Nomal';
                }
                else {echo 'Now temp Nomal';}
                    echo '<br>';
                if ($Hum > $SHum){
                    echo "Now Hum = $Hum";
                    echo '<br>';
                    echo 'Now Hum No Nomal';
                }
                else {echo 'Now hum Nomal';}
        }

            
                
    
                
    
            
            
            
    
            
    
        
?>