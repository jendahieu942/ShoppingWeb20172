<!DOCTYPE html>
<html>
<head><?php session_start(); ?>

	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		#cover{
			height: 950px;
			width: 1200px;
			background-color: #99ff99;
			margin-right: auto;
			margin-left: auto;
		}
		#yeucau input{
			width: 250px;
			margin-left: 25px;
			height: 40px;
			font-size: 25px;
			background-color: #ffb84d;
		}
		#view input{
			width: 600px;
			margin-left: 25px;
			height: 40px;
			font-size: 25px;
			background-color: #ffb84d;
		}
		#yeucau{
			width: 300px;
			display: inline-flex;
		}
		#view{
			width: 850px;
			height: 800px;
			display: inline-flex;
			background-color: white;
			overflow: scroll;
		}
		#viewproduct tr td form input{
			width:100px;
		}
	</style>
</head>
<body>
	<div id="cover">
		<h1>ADMIN PAGE</h1>
		<div id="yeucau">
			<form action="admin.php" method="post" class='form-group'>
				<h3>VIEW PRODUCT</h3>
				<input type="submit" name="Apple" value="APPLE" class='form-control'><br>
				<input type="submit" name="Huawei" value="HUAWEI" class='form-control'><br>
				<input type="submit" name="OPPO" value="OPPO" class='form-control'><br>
				<input type="submit" name="Samsung" value="SAMSUNG" class='form-control'><br>
				<input type="submit" name="Vivo" value="VIVO" class='form-control'><br>
				<input type="submit" name="Xiaomi" value="XIAOMI" class='form-control'><br>
				<h3>ADD PRODUCT</h3>
				<input type="submit" name="insert_product" value="ADD PRODUCT" class='form-control'><br>
				<h3>VIEW BILL</h3>
				<input type="submit" name="ngay" value="TODAY" class='form-control'><br>
				<input type="submit" name="thang" value="THIS MONTH" class='form-control'><br>
				<input type="submit" name="nam" value="THIS YEAR" class='form-control'><br>
				<input type="submit" name="all" value="ALL" class='form-control'><br>
			</form>
		</div>
		<div id="view">
			<br>
			<?php
				include "view_admin.php";
			?>
		</div>
		<script src="admin.js"></script>
	</div>
</body>
</html>
