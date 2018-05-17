<?php
	$str=$_REQUEST["q"];
	if($str!=""){
			$_SESSION["search_product"]=$str;
			$db=mysqli_connect("localhost","root","12345","shoppingweb");
			$sql="select * from product where upper(proName) like upper('%$str%')";
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
				echo "no product $str";
			}
}
?>