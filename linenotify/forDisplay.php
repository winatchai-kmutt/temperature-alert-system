<?php
/*ต้องเอาข้อมูลล่าสุดมาประมวลผลเรื่อยๆ โดยtempและhum จะinsertเข้ามาเรื่อยๆ ถ้าเกินstatus จะแจ้งเตือนไลน์*/
            /* ดึง lasstID จาก weather*/
require('connect.php');
require('lastID.php');

        while ($THResult = mysqli_fetch_array($THQuery)){
                $Temp = $THResult['temp'];
                $Hum = $THResult['hum'];
                $time = $THResult['time'];
                echo "Time '$time'";
                echo '<br>';
                echo "Now tempreture is $Temp";
                echo '<br>';
                echo "Now humudity is $Hum";
                echo '<br>';
               
                

                /* สิ่งที่อยากรู้ 
                1. ทำไมข้อมูลของ มีการสุ่มแสดงผล 
                2. ทำไมไลน์ไม่แจ้งเตือนเพียง section เดียว
                3. ดึงค่าล่าสุดจาก sql ได้อย่าง
                
                
                
                
                */
            
                
            

        }
        

            
                
    
                
    
            
            
            
    
            
    
        
?>