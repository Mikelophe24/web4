<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<link rel="stylesheet" href="<?php echo URLROOT ?>/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/Public/Css/dinhdang7.css">
    <script src="<?php echo URLROOT ?>/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo URLROOT ?>/Public/Js/popper.min.js"></script>
    <script src="<?php echo URLROOT ?>/Public/Js/bootstrap.min.js"></script>
<body>
<form method="post" action="<?php echo URLROOT ?>/formthem_ctrl/themmoi">
    <div class="form-group">
        <label for="myID">ID môn học</label>
        <input type="text" id = "myID" class="form-control dd1" placeholder="ID môn học" name="txtIDMonHoc" value="<?php if(isset($data['id'])) echo $data['id'] ?>" required>
        <label for="myMaMon">Mã môn học</label>
        <input type="text" id = "myMaMon" class="form-control dd1" placeholder="Mã môn học" name="txtMaMonHoc" value="<?php if(isset($data['mamon'])) echo $data['mamon'] ?>" required>
        <label for="myTenMon">Tên Môn Học</label>
        <input type="text" id="myTenMon" class="form-control" placeholder="Tên Môn Học" name="txtTenMonHoc" value="<?php if(isset($data['tenmon'])) echo $data['tenmon'] ?>" required>
        <label for="mySoTinChi">Số Tín Chỉ</label>
        <input type="text" id="mySoTinChi" class="form-control" placeholder="Số Tín Chỉ" name="txtSoTinChi" value="<?php if(isset($data['sotinchi'])) echo $data['sotinchi'] ?>" required>
        <br>
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>   
        <a href="<?php echo URLROOT ?>/formchinh_ctrl/timkiem1"  class="btn btn-primary" name="btnQuayLai">Quay Lại</a>                      
    </div>
</form>
</body>
</html>