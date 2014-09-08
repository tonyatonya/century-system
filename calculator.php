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
<body class="calculator">
<div class="panel">
	<div class="panel-title">คิดเงิน</div>
	<div class="inner">
		<ul>
			<li>ราคารวม	<div class="box"><input type="text" placeholder="0"></div>	บาท</li>
			<li>รับเงินมา	<div class="box"><input type="text" placeholder="0"></div>	บาท</li>
			<li>เงินทอน	<div class="box"><input type="text" placeholder="0"></div>	บาท</li>
		</ul>
		<div class="cal-btn">
			<div class="cbtn" rel="7">7</div>
			<div class="cbtn" rel="8">8</div>
			<div class="cbtn" rel="9">9</div>
			<div class="cbtn" rel="div">/</div>
			<div class="cbtn" rel="4">4</div>
			<div class="cbtn" rel="5">5</div>
			<div class="cbtn" rel="6">6</div>
			<div class="cbtn" rel="mul">*</div>
			<div class="cbtn" rel="1">1</div>
			<div class="cbtn" rel="2">2</div>
			<div class="cbtn" rel="3">3</div>
			<div class="cbtn" rel="min">-</div>
			<div class="cbtn" rel="0">0</div>
			<div class="cbtn" rel=".">.</div>
			<div class="cbtn" rel="plus">+</div>
			<div class="cbtn" rel="Ent">Ent</div>
		</div>
	<button class="btn btn-primary">ออกตั๋ว</button>
	</div>
</div>
</body>
</html>