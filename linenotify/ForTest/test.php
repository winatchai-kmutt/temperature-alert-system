<html>

<head></head>

<body>
    <?php
  require('connect.php');

  $last_id = "SELECT MAX(Num) AS maxid FROM changing"; // query อ่านค่า id สูงสุด
  $result = mysqli_query($connect, $last_id); // ทำคำสั่ง
  $ret = mysqli_fetch_assoc($result); // อ่านค่า
  $last_id = $ret['maxid']; // คืนค่า id ที่ insert สูงสุด

  $sql ="SELECT * FROM changing WHERE Num = $last_id";

  $objQuery = mysqli_query($connect, $sql) or die("Error Query [" . $sql . "]");
  ?>
    <table border="1">
        <tr>
            <th width="50">
                <div align="center">id</div>
            </th>
            <th zwidth="50">
                <div align="center">Num</div>
            </th>
            <th width="100">
                <div align="center">statusTemp</div>
            </th>
            <th width="100">
                <div align="center">statusHum</div>
            </th>
        </tr>
        <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) { // Fetch ข้อมูลจากฐานข้อมูลมาเก็บไว้ใน List ของ Array
    ?>
        <tr>
            <td>
                <div align="center"><?php echo $i; ?></div>
            </td>
            <td><?php echo $objResult["Num"]; ?></td>
            <td><?php echo $objResult["statusTemp"]; ?></td>
            <td><?php echo $objResult["statusHum"]; ?></td>
        </tr>
        <h1> <?php echo $objResult["statusTemp"]; ?></h1>

        <?php $i++;}?>
        <?php echo $objResult["statusHum"];?>

    </table>
    
    <?php?>
         <?php echo 'gggggggggggggg';?>



    <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>