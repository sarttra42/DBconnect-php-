<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
    <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>
    <form action="insertData.php" method="POST">
        <div class="form-group">
            <label for="firstname">ชื่อ</label>
            <input type="text" name="fname" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">นามสกุล</label>
            <input type="text" name="lname" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="gender">เพศ</label>
            <input type="radio" name="gender" value="male">ชาย
            <input type="radio" name="gender" value="female">หญิง
            <input type="radio" name="gender" value="other">อื่นๆ
        </div>
        <div class="form-group">
            <label for="skill">ทักษะ</label>
            <input type="checkbox" name="skill[]" value="Java">Java
            <input type="checkbox" name="skill[]" value="PHP">PHP
            <input type="checkbox" name="skill[]" value="Python">Python
            <input type="checkbox" name="skill[]" value="HTML5">HTML5
        </div>
         <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
         <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
         <a href="index.php" class="btn btn-primary">หน้าแรก</a>
        </form>
    </div>
</body>
</html>