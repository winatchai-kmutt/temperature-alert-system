<?php
    require('connect.php');              //การใช้ร่วมระหว่างsendLineกับsendST ทีปัญหา จะส่งข้อมูลอีกไฟไปอรกไฟล์โดยไม่ต้องผ่านฟอร์มได้ยังไง?
    /* ดึง lastID จาก changing*/
        $last_id = "SELECT MAX(Num) AS maxid FROM changing"; // query อ่านค่า id สูงสุด
        $result = mysqli_query($connect, $last_id); // ทำคำสั่ง
        $ret = mysqli_fetch_assoc($result); // อ่านค่า
        $last_id = $ret['maxid']; // คืนค่า id ที่ insert สูงสุด

        $sqlCh ="SELECT * FROM changing WHERE Num = $last_id";
        $objQuery = mysqli_query($connect, $sqlCh) or die("Error Query [" . $sql . "]");
        while ($objResult = mysqli_fetch_array($objQuery)) { 
            /* ต้องเปลี่ยนรูปของข้อมูลเป็น ลิส ดังนั้นจึงใช้ Fetch ข้อมูลจากฐานข้อมูลมาเก็บไว้ใน List ของ Array
            ต้องใช้คู่กับ while และต้องทำงงานในลูบ*/
            $STemp = $objResult['statusTemp'];
            $SHum = $objResult['statusHum'];
            
        }


    
        
    
    
    
?>