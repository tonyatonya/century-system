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
<body class="withlogo reserve-check">
<div class="container">
<div class="headermenu">
	<div class="logout">
		<button type="submit" class="btn btn-primary" onclick="location.href='home.php'">ย้อนกลับหน้าหลัก</button>
	</div>
</div>
<div class="mainpanel">
	<div class="panel">
		<div class="panel-title">กรุณากรอกรหัสจอง</div>
		<input type="text" class="form-control" placeholder="วันที่">
		<input type="text" class="form-control" placeholder="รหัสจอง">
		<button class="btn btn-primary" style="margin-top:10px;">OK</button>
	</div>
</div>
<?php include('footmenu.php') ?>
</div>
</body>
</html>