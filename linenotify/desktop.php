<html>

<head>
    <title>
        Temp&Hum
    </title>
</head>

<body>
    <h1>Insert Data : INPUT Temp and Hum for notify </h1>
    <h2>Tempreture between 20 - 30 and Hummunity between 60-80 %</h2>
    <form action="insertStatus.php" method="POST" name="changing">
        <table border="1">
            <tr>
                <td>Status Temp : </td>
                <td>
                    <input type="number" name="Status_Temp" max='30' min='20'>
                </td>

                <td>Status Hum : </td>
                <td>
                    <input type="number" name="Status_Hum" max='80' min='40'>
                </td>
            </tr>
            <input type="submit" value="Insert Data">
    </form>
    <p>
        <?php
            require('forDisplay.php');
            ?>
    </p>

</body>

</html>