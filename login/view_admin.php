<?php
				if(isset($_POST['insert_supplier'])){
					echo "<form action='admin.php' method='post'>
								<h3>ADD SUPPLIER</h3>
								<p>ID Supplier:</p><input type='text' name='id' id='idsupplier'>
								<p id='error_id'></p>
								<p>Name Supplier:</p><input type='text' name='name' id='namesup'>
								<p id='error_name'></p>
								<br><input type='submit' name='submit_sup' value='FINISH'>
							</form>";
				}else{
					if(isset($_POST['insert_product'])){
					$db=mysqli_connect("localhost","root","","shoppingweb");
					$sql="select * from supplier";
					$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
					echo "<form action='admin.php' method='post' enctype='multipart/form-data'>
								<h3>ADD PRODUCT</h3>
								<input type='text' name='id' id='idpro' placeholder='id product'><br>
								<p id='error_id'></p>
								<input type='text' name='name' id='namepro' placeholder='name product'><br>
								<p id='error_name'></p>
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
				$db=mysqli_connect("localhost","root","","shoppingweb");
				$sql="select * from supplier";
				$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
				while($result && $row=mysqli_fetch_array($result)){
					$id=$row['idsupplier'];
					if(isset($_POST["$id"])){
						setcookie('idsupplier',$id);
						$db1=mysqli_connect("localhost","root","","shoppingweb");
						$sql1="select proid,name,description,price,quantity,namesupplier from product,supplier where product.idsupplier=supplier.idsupplier and product.idsupplier='$id'";
						$result1=mysqli_query($db1,$sql1);
						echo "<table><tr><td>proid</td><td>proname</td><td>supplier</td><td>description</td><td>price</td><td>quantity</td></tr>";
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
						echo "</table>";
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
				}}	
			?>