<?php
require('connect.php');
require('lastID.php');
while ($THResult = mysqli_fetch_array($THQuery)){
    $Temp = $THResult['temp'];
    $Hum = $THResult['hum'];
   
    echo "Now temp = $Temp";
    echo '<br>';
    if ($Temp > $STemp ){
    echo 'Now temp No Nomal';
    $notify = "Now temp = $Temp ,  temp No Nomal ";
    require('notify.php');
    }
    else {echo 'Now temp Nomal';}
    echo '<br>';
}

?>