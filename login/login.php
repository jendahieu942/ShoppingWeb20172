<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./dinhdang.css">
	<script src="hay.js"></script>
	<?php
		include "xulilogin.php";
	?>
</head>
<body style="background-color: #3366ff">
	<div id="cover" style="width: 600px;margin-left: auto;margin-right: auto;margin-top: 100px;background-color: #00ccff;border: 1px solid"><br>
		<form action="" id="form_login" method="post" role="form" onsubmit="return xuli()">
			<caption><b style="font-size: 60px;">Login</b></caption>
			<div style="font-size: 40px;margin-left: 50px;;width: 500px">
				<input type="text" id="idusername" name="username" placeholder="Username" 
				style="font-size: 40px;width: 500px;height: 50px;"><br>
				<p id="username_error" style="font-size: 20px"></p>
			</div>
			<div style="font-size: 40px;margin-left: 50px;width: 505px">
				<input type="text" id="idpassword" name="password" placeholder="Password" style="font-size: 40px;width: 5̀05px;height: 50px;"><br>
				<p id"password_error" style="font-size: 20px"></p>
			</div>
			<div style="font-size: 20px;margin-left: 50px;color: red"><?php if($error==1) echo "<p id='error'>username or password is incorrect!!!</p>"; ?></div>
			<div style="margin-left: 50px;width: 500px"><input type="submit" name="Login" value="Login" style="height: 60px;background-color: #ff9900;width: 500px;font-size: 40px;text-align: center;"></div><br>
			<div style="background-color: #99cc00;height: 60px;text-align: center;margin-left: 50px;width: 500px"><a href="dangki.php" style="text-decoration: none;font-size: 40px;">Creat Account</a></div><br>
		</form>
	</div>
</body>
</html>
