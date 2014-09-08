<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title></title>
	<meta name="description" content="" />
  	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<?php require('inc_header.php'); ?>
	<style>
		html{background: none !important;height:auto !important;}
		body{background: none !important; height: auto !important;}
	</style>
</head>
<body class="paymentoption">
<div class="panel">
	<div class="panel-title">ชำระเงินด้วยบัตรเงินสด</div>
	<div class="seat-summary">ที่นั่งทั้งหมด <div>1</div></div>
	<div class="option">
	กรุณารูดบัตรเพื่อทำการอ่าน
	<ul>
		<li><button class="btn btn-primary">อ่านบัตร</button></li>
		<li><button class="btn btn-primary">เลือกส่วนลดอื่น</button></li>
	</ul>
	
</div>
	<div class="table-frame">
		<table>
			<tr>
				<th>เลขที่</th>
				<th>ประเภท</th>
				<th>สาขา</th>
				<th>ส่วนลด</th>
				<th>เหลือที่นั่ง</th>
				<th>จำนวนที่ใช้ลด</th>
				<th>คะแนน</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<div class="last-row"></div>
	</div>
	<div class="sum">
		<ul>
			<li>ส่วนลด <div class="box">0</div></li>
			<li>ราคารวม <div class="box">0</div></li>
			<li>รับเงิน <div class="box">0</div></li>
			<li>เงินทอน <div class="box">0</div></li>
		</ul>
	</div>
	<div class="select">
		<input type="checkbox" class="from-control">
		ใช้บัตรส่วนลด
		<button class="btn btn-primary">ออกตั๋ว</button>
	</div>
</div>
</body>
</html>