
<?php
	if(isset($_POST["insert_product"])){
		header("location: ../adminShoppingWeb.php");
	}
	$pass="12345";
	$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
	$sql="select distinct supplier from product";
	$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
	if($result!=null){
		while($row=mysqli_fetch_array($result)){
			$supplier=$row["supplier"];
			if(isset($_POST[$supplier])){
				$_SESSION["supplier"]=$supplier;
				mysqli_close($db);
				$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
				$sql="select * from product where supplier='$supplier'";
				$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
				if($result!=null){
					echo "<table id='viewproduct' class='table'><tr><td>NAME</td><td>SUPPLIER</td><td>DESCRIPTION</td><td>PRICE</td><td>QUANTITY</td><td>EDIT</td></tr>";
						while($row1=mysqli_fetch_array($result)){
							$id=$row1['proId'];
							$name=$row1['proName'];
							$supplier=$row1['supplier'];
							$des=$row1['srcSolution'];
							$price=$row1['price'];
							$quantity=$row1['quantity'];
							echo "<tr><td>$name</td><td>$supplier</td><td>$des</td><td>$price</td><td>$quantity</td><td><form action='admin.php' method='post' class='form-group'><input type='text' name='new_price_$id' value='$price' placeholder='new price' class='form-control' style='width:100px'>
								<input type='text' name='new_quan_$id' value='$quantity' placeholder='new quantity' class='form-control' style='width:100px'><input type='submit' name='edit_$id' value='edit' class='form-control' style='width:100px'></tr>";
						}
						echo "</table>";
						mysqli_close($db);
				}else{
					mysqli_close($db);
					echo "no product";
				}
			}
		}
		$pass="12345";
		$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
				$sql="select * from product";
				$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
				while($result && $row=mysqli_fetch_array($result)){
					$id="edit_".$row['proId'];
					$proid=$row['proId'];
					if(isset($_POST["$id"])){
						mysqli_close($db);
						$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
						$quan=$_POST["new_quan_$proid"];
						$price=$_POST["new_price_$proid"];
						$sql2="update product set quantity='$quan',price='$price' where proId='$proid'";
						mysqli_query($db,$sql2,MYSQLI_USE_RESULT);
						mysqli_close($db);
				$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
				$supplier=$_SESSION["supplier"];
				$sql="select * from product where supplier='$supplier'";
				$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
				if($result!=null){
					echo "<table id='viewproduct' class='table'><tr><td>NAME</td><td>SUPPLIER</td><td>DESCRIPTION</td><td>PRICE</td><td>QUANTITY</td><td>EDIT</td></tr>";
						while($row1=mysqli_fetch_array($result)){
							$id=$row1['proId'];
							$name=$row1['proName'];
							$supplier=$row1['supplier'];
							$des=$row1['srcSolution'];
							$price=$row1['price'];
							$quantity=$row1['quantity'];
							echo "<tr><td>$name</td><td>$supplier</td><td>$des</td><td>$price</td><td>$quantity</td><td><form action='admin.php' method='post' class='form-group'><input type='text' name='new_price_$id' value='$price' placeholder='new price' class='form-control' style='width:100px'>
								<input type='text' name='new_quan_$id' value='$quantity' placeholder='new quantity' class='form-control' style='width:100px'><input type='submit' name='edit_$id' value='edit' class='form-control' style='width:100px'></tr>";
						}
						echo "</table>";
						mysqli_close($db);
				}else{
					mysqli_close($db);
					echo "no product";
				}
					}
				}
				function show($result){
					echo "<table id='viewbill' class='table table-striped'><tr><td><b>PRODUCT</b></td><td><b>USERNAME</b></td><td><b>QUANTITY</b></td><td><b>PAIDDATE</b></td></tr>";
					if($result!=null){
					while($row=mysqli_fetch_array($result)){
						$proname=$row['proName'];
						$username=$row['userName'];
						$quantity=$row['quantity'];
						$paiddate=$row['paidDate'];
						echo "<tr><td>$proname</td><td>$username</td><td>$quantity</td><td>$paiddate</td></tr>";
					}
					echo "</table>";
					}
				}
				if(isset($_POST["thang"])){
					$pass="12345";
					$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
					$sql="select proName,userName,bill.quantity,paidDate from bill,product,user where bill.userId=user.userId and bill.proId=product.proId and Month(paidDate)=Month( CURDATE()) and year(paidDate)=year(CURDATE()) ";
					$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
					if($result==NULL){
						echo "no bill this month";
					}else{
						show($result);
					}
					mysqli_close($db);
				}
				if(isset($_POST["ngay"])){
					$pass="12345";
					$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
					$sql="select proName,userName,bill.quantity,paidDate from bill,product,user where bill.userId=user.userId and bill.proId=product.proId and Day(paidDate)=Day(CURDATE()) and Month(paidDate)=Month( CURDATE()) and year(paidDate)=year(CURDATE()) ";
					$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
					if($result==NULL){
						echo "no bill today";
					}else{
						show($result);
					}
					mysqli_close($db);
				}
				if(isset($_POST["nam"])){
					$pass="12345";
					$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
					$sql="select proName,userName,bill.quantity,paidDate from bill,product,user where bill.userId=user.userId and bill.proId=product.proId and year(paidDate)=year(CURDATE())";
					$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
					if($result==NULL){
						echo "no bill this year";
					}else{
						show($result);
					}
					mysqli_close($db);
				}
				if(isset($_POST["all"])){
					$pass="12345";
					$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
					$sql="select proName,userName,bill.quantity,paidDate from bill,product,user where bill.userId=user.userId and bill.proId=product.proId group by bill.paidDate,bill.quantity,userName,proName";
					$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
					if($result==NULL){
						echo "no bill";
					}else{
						show($result);
					}
					mysqli_close($db);
				}

	}
//	if(isset($_SESSION["supplier"]))
?>
<!--if(isset($_POST['insert_product'])){
					$db=mysqli_connect("localhost","root","","shoppingweb");
					$sql="select * from supplier order by namesupplier";
					$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
					echo "<form action='admin.php' method='post' id='form_insert_pro'  role='form' enctype='multipart/form-data' onsubmit='return insert_pro()' >
								<h3>ADD PRODUCT</h3>
								<input type='text' name='id' id='idpro' placeholder='id product'><br>
								<p id='error_id1'></p>
								<input type='text' name='name' id='namepro' placeholder='name product'><br>
								<p id='error_name1'></p>
								<p>ID Supplier: <select name='idsup'>";
										while($row=mysqli_fetch_array($result)){
											$id=$row['idsupplier'];
											$name=$row['namesupplier'];
											echo "<option value='$id'>$name</option>";
										}
					echo"</select></p>
								<input type='text' name='des' id='iddes' placeholder='description'><br>
								<input type='text' name='price' id='idprice' placeholder='price'><br>
								<p id='error_price'></p>
								<input type='text' name='quantity' id='idquantity' placeholder='quantity'><br>
								<p>Image:</p><input type='file' name='file' id='file'>
								<p id='error_image'></p>
								<br><input type='submit' name='submit_pro' value='FINISH'><br>
						</form>";
						mysqli_close($db);

				}else{
				
				while($result && $row=mysqli_fetch_array($result)){
					$id=$row['idsupplier'];
					if(isset($_POST["$id"])){
						setcookie('idsupplier',$id);
						$db1=mysqli_connect("localhost","root","","shoppingweb");
						$sql1="select proid,name,description,price,quantity,namesupplier from product,supplier where product.idsupplier=supplier.idsupplier and product.idsupplier='$id' order by name";
						$result1=mysqli_query($db1,$sql1);
						if($result1){
						echo "<table border='1'><tr><td style='width:50px;'>proid</td><td style='width:70px;'>proname</td><td style='width:70px;'>supplier</td><td style='width:200px;'>description</td><td style='width:50px;'>price</td><td style='width:50px;'>quantity</td><td>edit</td></tr>";
						while($result1 && $row1=mysqli_fetch_array($result1)){
							$id=$row1['proid'];
							$name=$row1['name'];
							$supplier=$row1['namesupplier'];
							$des=$row1['description'];
							$price=$row1['price'];
							$quantity=$row1['quantity'];
							echo "<tr><td style='width:50px;'>$id</td><td style='width:70px;'>$name</td><td style='width:70px;'>$supplier</td><td style='width:200px;'>$des</td><td style='width:50px;'>$price</td><td style='width:50px;'>$quantity</td><td><form action='admin.php' method='post'><input type='text' name='new_price_$id' value='$price' placeholder='new price' size='20' style='width:120px'>
								<input type='text' name='new_quan_$id' value='$quantity' placeholder='new quantity' size='11' style='width:120px'><input type='submit' name='edit_$id' value='edit' style='width:50px;'></tr>";
						}
						echo "</table>";}else{
							echo "no product!";
						}
						mysqli_close($db1);
					}
				}
				mysqli_close($db);
				$db=mysqli_connect("localhost","root","","shoppingweb");
				$sql="select * from product";
				$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
				while($result && $row=mysqli_fetch_array($result)){
					$id="edit_".$row['proid'];
					$proid=$row['proid'];
					if(isset($_POST["$id"])){
						$quan=$_POST["new_quan_$proid"];
						$price=$_POST["new_price_$proid"];
						$sql2="update product set quantity='$quan',price='$price' where proid='$proid'";
						$db1=mysqli_connect("localhost","root","","shoppingweb");
						mysqli_query($db1,$sql2);
					}
				}
				} -!>