<!DOCTYPE html>
<html>
<head>
	<title>Dangki</title>
	<meta charset="utf-8">
	<script src="hay.js"></script>
	<style type="text/css">
		p{
			margin-left:50px;
		}
		input{
			margin-left: 50px;
			height: 60px;
			font-size: 40px;
			width: 700px;
		}
		input.submit{
			background-color: #66ff66;
			height: 90px;
			text-align: center;
		}
	</style>
	<?php
		include "xulidangki.php";
	?>
</head>
<body>
	<div style="width: 800px;margin-right: auto;margin-left: auto;background-color: #ccff33">
		<form action="dangki.php" method = "post" onsubmit="return xulidangki()" id="form_dangki" role="form">
			<p>Creat Account</p>
			<p>Username:</p><input type="text" name="username" id="idusername" placeholder="username"><br>
			<p id="username_error"><?php if($error!="") echo $error; ?></p>
			<p>Password:</p><input type="text" name="password" id="idpassword" placeholder="password"><br>
			<p id="password_error"></p>
			<p>Email:</p><input type="text" name="email" id="idemail" placeholder="your email"><br>
			<p id="email_error"></p>
			<p>Phone:</p><input type="text" name="phone" id="idphone" placeholder="phone number"><br>
			<p id="phone_error"></p>
			<p>Address:</p><input type="text" name="address" id="idaddress" placeholder="your address"><br>
			<p id="address_error"></p><br>
			<input type="submit" name="submit" value="Creat" style="background-color: #ff6600;">
		</form>
	</div>
</body>
</html>