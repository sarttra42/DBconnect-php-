
<?php 

$id = $_GET["id"];
require_once("dbconnect.php");

$sql = "SELECT * FROM employee WHERE id = $id";
$result = mysqli_query($con,$sql);

 $row = mysqli_fetch_row($result);

 $skillarr=["Java","PHP","Python","HTML5"]; //เตรียมตัวเลือกในแบบฟอร์มทั้งหมดก่อน

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
    <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2>
    <form action="updateData.php" method="POST">

        <input type="hidden" value="<?php echo $row[0]?>" name="id">

        <div class="form-group">
            <label for="firstname">ชื่อ</label>
            <input type="text" name="fname" id="" class="form-control" value="<?php echo $row[1]?>">
        </div>
        <div class="form-group">
            <label for="lastname">นามสกุล</label>
            <input type="text" name="lname" id="" class="form-control" value="<?php echo $row[2]?>" >
        </div>
        <div class="form-group">
            <label for="gender">เพศ</label>
            <?php 
            if($row[3] == "male"){
                echo "<input type='radio' name='gender' value='male' checked>ชาย";
                echo "<input type='radio' name='gender' value='female'>หญิง";
                echo "<input type='radio' name='gender' value='other'>อื่นๆ";
            }
            else if($row[3] == "female"){
                echo "<input type='radio' name='gender' value='male'>ชาย";
                echo "<input type='radio' name='gender' value='female' checked>หญิง";
                echo "<input type='radio' name='gender' value='other'>อื่นๆ";
            }
            else{
                echo "<input type='radio' name='gender' value='male'>ชาย";
                echo "<input type='radio' name='gender' value='female'>หญิง";
                echo "<input type='radio' name='gender' value='other' checked>อื่นๆ";
            }
            ?>
        </div>
        <div class="form-group">
            <label for="skill">ทักษะ</label>
            <?php
            $skillStr = explode(",",$row[4]);

            foreach($skillarr as $value){
                if(in_array($value,$skillStr)){
                    echo "<input type='checkbox' name='skill[]' value='$value' checked>$value";
                }else{
                    echo "<input type='checkbox' name='skill[]' value='$value' >$value";
                }
            }
            
            ?>
        </div>
         <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
         <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
         <a href="index.php" class="btn btn-primary">หน้าแรก</a>
        </form>
    </div>
</body>
</html>