
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
</head>
<body>
<?php
include("header.php")
?>
<main>
    <div class="container-fluid">
    <div class="card">
  <div class="card-header">
    ฟอร์มสมัครสมาชิก
  </div>
  <div class="card-body">
<form name="form1" action="insert.php" method="post">
    <div class="row"><!-- row1 -->
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
    <select name="text_firstname" id="text_firstname" class="form-control ">
        <option value="">คำนำหน้าชื่อ</option>
        <option value="นาย">นาย</option>
        <option value="นาย">นาง</option>
        <option value="นาย">นางสาว</option>
    </select>
    </div>
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
    <input type="text" class="form-control" name="text_name" id="text_name" placeholder="กรุณาใส่ชื่อ">
    </div>
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
    <input type="text" class="form-control" name="text_lastname" id="text_lastname" placeholder="กรุณาใส่นามสกุล">
    </div>
    </div><!-- row1 -->

    <div class="row"><!-- row2 -->
    <div class="col-md-2">
        <label for="exampleFormControlInput1" class="form-label">เพศ</label>
        <input type="radio" class="form-check-input" name="sex" id="sex"> ชาย
        <input type="radio" class="form-check-input" name="sex" id="sex"> หญิง
    </div>

    <div class="col-md-3">
    <label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
   <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate" placeholder="00/00/0000" date-provid="datepicker" data-date-language="th-th">
   </div>

    <div class="col-md-7">
    <label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
    <textarea class="form-control" name="text_address" id="text_address" placeholder="กรุณาใส่ที่อยู่"></textarea>
    </div>
    </div><!-- row2 -->

    <div class="row"><!-- row3 -->
    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label">เบอร์โทร์</label>
    <input type="text" class="form-control" name="txt_number" id="txt_number" placeholder="กรุณาใส่เบอร์โทร">
    </div>
    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label">ที่อยู่อีเมลล์</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
    </div><!-- row3 -->
  <br>
<div class="row"><!-- row4 -->
    <div class="col-md-12">
        <center>
    <button type="summit" class="btn btn-success">บันทึก</button>
    <button type="reset" class="btn btn-danger">ยกเลิก</button>
    </center>
</div>
    </div><!-- row4 -->
</form>
   
  </div>
</div>
    </div>
    
</main>

  <?php
  include("footer.php")
  ?>
</div>
</body>
</html>