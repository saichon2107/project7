<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>แบบฟอร์มรับข้อมูล</title>
</head>
<body>
<div class="container-fluid">
 
<form class="row g-3 mt-3">
  <div class="col-md-3">
    <label for="validationDefault01" class="form-label">รหัสนักศึกษา</label>
    <input type="text" class="form-control" name="id" id="validationDefault01" value="" required>
  </div>

  
  <div class="col-md-2 ">
  <label class="input-group-text" for="inputGroupSelect01">คำนำหน้า</label>
  <select class="form-select" name="prefix" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="นาย">นาย</option>
    <option value="นางสาว">นางสาว</option>
    <option value="นาง">นาง</option>
  </select>
</div>
 

  <div class="col-md-3">
    <label for="validationDefault02" class="form-label">ชื่อ</label>
    <input type="text" class="form-control" name="fname" id="validationDefault02" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">นามสกุล</label>
    <input type="text" class="form-control" name="lname" id="validationDefault02" value="" required>
  </div>

  <div class="col-md-3">
    <label for="validationDefault03" class="form-label">เบอร์โทร</label>
    <input type="text" class="form-control" name="tel" id="validationDefault03" required>
  </div>


  <div class="col-md-3">
    <label for="validationDefault03" class="form-label">อีเมล์</label>
    <input type="text" class="form-control" name="email" id="validationDefault03" required>
  </div>

  <div class="col-md-6">
      <div>
          <label for="defaultCheck1" class="form-label">งานอดิเรก</label>
      </div>
  <input class="form-check-input" type="checkbox" name="work1" value="เล่นเกมส์" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">เล่นเกมส์</label>
  <input class="form-check-input" type="checkbox" name="work2" value="เที่ยว" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">เที่ยว</label>
  <input class="form-check-input" type="checkbox" name="work3" value="ออกกำลังกาย" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">ออกกำลังกาย</label>
  <input class="form-check-input" type="checkbox" name="work4" value="นอน" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">นอน</label>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" name="send" type="submit">ส่งข้อมูล</button>
  </div>
</form>



<?php
if(isset($_GET['send'])){
    $id = $_GET['id'];
    $prefix = $_GET['prefix'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $tel = $_GET['tel'];
    $email = $_GET['email'];
    $work1 = $_GET['work1'];
    $work2= $_GET['work2'];
    $work3= $_GET['work3'];
    $work4 = $_GET['work4'];

    echo ("รหัสนักศึกษา $id $prefix $fname $lname $tel $email $work1 $work2 $work3 $work4");
   

?>


<?php  
}
?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>