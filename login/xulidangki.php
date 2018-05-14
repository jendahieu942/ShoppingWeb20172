<?php
		$error="";
		if(isset($_POST['submit'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$db=mysqli_connect("localhost","root","","shoppingweb");
			$sql="select username from user";
			$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
			while($row=mysqli_fetch_array($result)){
				if($username == $row['username']){
					$error="username is existed";
				}
			}
			if($error==""){
				$sql="insert into user(username,password,email,phone,address,role) values ('$username','$password','$email','$phone','$address',1)";
				mysqli_query($db,$sql);
				mysqli_close($db);
				header("location: login.php");
			}else{
				mysqli_close($db);
			}
		}
	?>