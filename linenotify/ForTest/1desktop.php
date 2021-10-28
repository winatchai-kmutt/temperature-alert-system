<html>

<head></head>

<body>
    <h2>Insert Data : INPUT Temp and Hum for notify</h2>
    <form action="insertX.php" method = "GET" name="changing">
        <table border="1">
            <tr>
                <td>Status Temp : </td>
                <td><select name="statusTemp">
                <?php $st = 1;
                while ($st <= 100) { ?>
            <option type ="number" value= <?php  $st ?>
                name = "st"><?php echo $st; ?>
            </option>
                    
                    <?php $st++ ;}?>
                    </select>
                </td>

                <td>Status Hum : </td>
                <td><select name="statusHum">
                <?php $sh = 1;
                while ($sh <= 100) { ?>
            <option type ="number" value= <?php  $sh ?>
                name = "sh"><?php echo $sh; ?>
            </option>
                    
                    <?php $sh++ ;}?>
                    </select>
                </td>
            </tr>
            <input type="submit" value="Insert Data">
            </form>

            // ส่งตัวแปรเข้า DB
                <?php
                require('connect.php');
                $query = "INSERT INTO `changing` (`StatusTemp`, `StatusHum`) VALUES ('$st', '$sh')";
                $result = mysqli_query($connect,$query) or die("Error Query [" . $query . "]");
                ?>
                
</body>

</html>