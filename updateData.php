<?php 
require_once("dbconnect.php");

echo $id = $_POST["id"];

echo $fname = $_POST["fname"];
echo $lname = $_POST["lname"];
echo $gender = $_POST["gender"];

echo $skill = implode(",",$_POST["skill"]);

$sql = "UPDATE employee SET fname = '$fname',lname = '$lname', gender = '$gender', skill = '$skill' WHERE id ='$id'";
$result = mysqli_query($con, $sql);

if($result){
    header("location:index.php");
    exit(0);    
}else{
    echo "เกิดข้อผิดพลาด".mysqli_error($con);
}

?>