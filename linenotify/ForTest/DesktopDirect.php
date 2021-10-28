<html>

<head></head>

<body>
    <h1>Insert Data : INPUT Temp and Hum for notify  </h1>
    <h2>Tempreture between 20 - 30 and Hummunity between 60-80 %</h2>
    <form action="sendLineDirect.php" method = "POST" >
        <table border="1">
            <tr>
                <td>Status Temp : </td>
                <td>
                <input type="number" name="Status_Temp" max = '30' min = '25' > 
                </td>

                <td>Status Hum : </td>
                <td>
                <input type="number" name="Status_Hum" max = '80' min = '60'> 
                </td>
            </tr>
            <input type="submit" value="Insert Data">
            </form>
                
</body>

</html>