<?php
		session_start();
		$error=0;
		if(isset($_POST['login-btn'])){
		$error=1;
		$username=$_POST['username'];
		$password=$_POST['password'];
		$db=mysqli_connect("localhost","root","12345","shoppingweb");
		$sql="select userPassword from user where userName='$username'";
		$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
		if($result != NULL){
			$row=mysqli_fetch_array($result);
			if($row!=NULL){
				mysqli_close($db);
				if($password==$row['userPassword']){
					$_SESSION['username']=$username;
					header("location: index.php");
				} 
			}
		}
	}
	?>