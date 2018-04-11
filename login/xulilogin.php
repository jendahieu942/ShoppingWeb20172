<?php
		$error=0;
		if(isset($_POST['Login'])){
		$error=1;
		$username=$_POST['username'];
		$password=$_POST['password'];
		$db=mysqli_connect("localhost","root","","shoppingweb");
		$sql="select password,role from user where username='$username'";
		$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
		if($result){
			$row=mysqli_fetch_array($result);
			if($row!=NULL){
				mysqli_close($db);
			if($password==$row['password']){
				setcookie("username",$username);
				setcookie("password",$password);
				if($row['role']==1){
					header("location: https://www.google.com.vn");
				}else{
					header("location: https://www.google.com.vn");
				}
			} 
			}
		}
	}
	?>