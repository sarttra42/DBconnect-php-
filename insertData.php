<?php
require_once("dbconnect.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$skill = implode(",",$_POST["skill"]);

$sql = "INSERT INTO employee(fname,lname,gender,skill) VALUES('$fname','$lname','$gender','$skill')";//ตัวแปรที่ทำหน้าที่แค่เก็บคำสั่ง Sql ไม่จำเป็นต้องประกาศก็ได้แล้วแต่ความถนัด
$result = mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);    
}else{
    echo "เกิดข้อผิดพลาด";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผล</title>
</head>
<body>
</body>
</html>