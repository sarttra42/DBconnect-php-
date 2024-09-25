<?php
require_once("dbconnect.php");

$id_arr = $_POST["idcheck"]; //รับค่าจาก From multipleDelete แท็กที่มีชื่อเป็น idcheck[] ส่งมาเป็นอาร์เรย์แต่ตอนรับไม่ต้องใส่ []

$idcheck = implode(",", $id_arr); //แปลงอาร์เรย์ให้เป็นสตริงหลายๆตัว ขั้นด้วย , เพื่อส่งไปทำงานต่อ


$sql = "DELETE FROM employee WHERE id in ($idcheck)";

$result =  mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);    
}else{
    echo "เกิดข้อผิดพลาด";
}


?>