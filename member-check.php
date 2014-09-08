<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title></title>
	<meta name="description" content="" />
  	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<?php require('inc_header.php'); ?>
</head>
<body class="withlogo member-check">
<div class="container">
<div class="headermenu">
	<div class="logout">
		<button type="submit" class="btn btn-primary" onclick="location.href='home.php'">ย้อนกลับหน้าหลัก</button>
	</div>
</div>
<div class="mainpanel">
	<div class="panel">
		<div class="panel-title">ระบบตรวจสอบสถานะบัตร</div>
		<table>
			<tr><th>เลขที่บัตร</th><td><input type="text" class="form-control"></td></tr>
			<tr><th>ประเภทของบัตร</th><td><input type="text" class="form-control"></td></tr>
			<tr><th>จำนวนที่นั่งส่วนลด</th><td><input type="text" class="form-control"></td></tr>
			<tr><th>จำนวนที่นั่งฟรี</th><td><input type="text" class="form-control"></td></tr>
			<tr><th>วันหมดอายุ</th><td><input type="text" class="form-control"></td></tr>
			<tr><th valign="top">ข้อมูลบัตร</th><td><textarea class="form-control"></textarea></td></tr>
		</table>
		
	</div>
</div>
<?php include('footmenu.php') ?>
</div>
</body>
</html>