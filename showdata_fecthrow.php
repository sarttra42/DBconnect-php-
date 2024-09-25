<?php
require_once("dbconnect.php");

// $sql = "SELECT * FROM employee"; เป็นการสร้างตัวแปล Sql เพื่อมารับคำสั่งเลือกข้อมูลใน Database
$result = mysqli_query($con,"SELECT * FROM employee");// ใช้คำสั่ง Query ด้วย Database:con และใส่คำสั่งเต็มหรือจะนำตัวแปร Sql ที่เก็บคำสั่งมาใช้งานก็ได้
$num0farr = mysqli_num_rows($result);//หาจำนวนแถวที่queryมาจาก database โดยเอา array ที่ num_rows มาเก็บใส่ตัวแปร numofarr เพื่อไปใช้ในลูป


for ($i = 0; $i < $num0farr; $i++){
    $row = mysqli_fetch_row($result);
    echo "ลำดับ = ".$row[0]."<br>";
    echo "ชื่อ = ".$row[1]."<br>";
    echo "นามสกุล = ".$row[2]."<br>";
    echo "เพศ = ".$row[3]."<br>";
    echo "ความสามารถ = ".$row[4]."<br><hr>"; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php" class="btn btn-primary">หน้าแรก</a>
</body>
</html>