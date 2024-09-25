<?php
require_once("dbconnect.php");
$idemployee =$_POST["idemployee"];
echo $idemployee;

$sql = "DELETE FROM employee WHERE id = $idemployee";
$result = mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);    
}else{
    echo "เกิดข้อผิดพลาด";
}

?>
