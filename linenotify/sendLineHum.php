<?php
require('connect.php');
require('lastID.php');
while ($THResult = mysqli_fetch_array($THQuery)){
    $Temp = $THResult['temp'];
    $Hum = $THResult['hum'];

    echo "Now Hum = $Hum";  
    echo '<br>';         
    if ($Hum > $SHum){
    echo 'Now Hum No Nomal';
    $notify = "Now Hum = $Hum , Hum No Nomal ";
    require('notify.php');
    }
    else {echo 'Now hum Nomal';}
}

?>