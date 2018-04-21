<?php 
		$db=mysqli_connect("localhost","root","","shoppingweb");
		$sql="select * from supplier";
		$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
		if(isset($_POST['submit_sup'])){
			$db=mysqli_connect("localhost","root","","shoppingweb");
			$id=$_POST['id'];
			$name=$_POST['name'];
			$sql2="insert into supplier(idsupplier,namesupplier) values ('$id','$name')";
			$result2=mysqli_query($db, $sql2) ;
		}
		if(isset($_POST['submit_pro'])){
			$db=mysqli_connect("localhost","root","","shoppingweb");
			$id=$_POST['id'];
			$name=$_POST['name'];
			$sup=$_POST['idsup'];
			$des=$_POST['des'];
			$price=$_POST['price'];
			$quantity=$_POST['quantity'];
			if(isset($_FILES['file'])){
				$src="img/".$_FILES['file']['name'];
				
				$sql3="insert into product(proid,name,idsupplier,src,description,price,quantity) values ('$id','$name','$sup','$src','$des','$price','$quantity')";
				mysqli_query($db,$sql3);
			}
		}
	?>