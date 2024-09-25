<?php 

require_once("dbconnect.php");

$sql = "SELECT * FROM employee";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result); //msqli_num_row คือการนับจำนวนแถวของข้อมูลว่ามีกี่แถว
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<div class="container">
<h1 class="text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
<hr>

<?php if($count>0){?>

    <form action="deleteTextField.php" class="form-group" method="POST">
    <label for="">รหัสพนักงาน</label>
    <input type="text" placeholder="ใส่รหัสพนักงานเพื่อลบ" class="form-control" name="idemployee">
    <input type="submit" value="ลบข้อมูล" class="btn btn-danger mt-3">
    </form>

    <table class="table table-hover table-bordered">
        <thead>  <!-- แบ่งเฉยๆว่าคือส่วนหัว-->
            <tr> <!-- tr คือแถวที่ 1 th คอลัมแต่เป็นตัวหน้าหรือก็คือหัวข้อของตาราง-->
                <th>รหัสพนักงาน</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>นามสกุล</th>
                <th>ทักษะ</th>
                <th>ลบข้อมูล</th>
                <th>ลบข้อมูลแบบกลุ่ม</th>
                
            </tr>
        </thead>

        <tbody>
        <?php // mysqli_fetch_row คือเลือกข้อมูลมาทีละแถวจาก Database employee โดยอ้างอิงด้วยเลข index assoc คืออ้างอิงด้วยคีย์ใน Database เช่น id fname lname
    while ($row = mysqli_fetch_row($result)){?>
            <tr> <!-- tr คือแถวที่ 1 td คอลัมแต่ละช่อง ประกาศแค่ 1 ชุดเพราะมีการวนลูป while-->
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td>
                    <a href="deleteQueryString.php?idemp=<?php echo $row[0] ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบ</a>
                </td>
                <form action="multipleDelete.php" method="POST">
                    <td>
                        <input type="checkbox" name="idcheck[]" class="form-control" value="<?php echo $row[0]; ?>"> <!-- ถ้าค่าที่ส่งเป็นอาร์เรย์ต้องใส่ [] ในชื่อด้วย -->
                    </td>                 
            </tr>
        <?php } ?>
        </tbody>

    </table>
    
<?php }else{?>
    <hr>
    <div class="alert alert-danger">ไม่มีข้อมูลที่ต้องแสดง</div>
    <hr>
<?php } ?>            
    <a href="insertForm.php" class="btn btn-success">บันทึกข้อมูลพนักงาน</a>
    <?php if($count> 0){ ?>
    <input type="submit" value="DeleteCheck" class="btn btn-danger">
    <?php } ?>
    </form>           
    <a href="showdata_fecthrow.php" class="btn btn-primary">การใช้งาน Fetchrow</a>

    <a href="http://127.0.0.1/phpmyadmin/" class="btn btn-info">Dbcon</a><br>
    

</div>
</body>
</html>