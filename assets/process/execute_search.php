<?php
	$str=$_REQUEST["q"];
	if($str!=""){
	$pattern="/^[0-3][0-9]-[0-1][0-9]-20[0-9][0-9]$/";
	if(!preg_match($pattern, $str)){
		echo "invalid date";
	}else{
		$array=explode("-", $str);
		$ngay=$array[0];
		$thang=$array[1];
		$nam=$array[2];
		$pass="12345";
		$db=mysqli_connect("localhost","root",$pass,"shoppingweb");
		$sql="select proName,userName,bill.quantity,paidDate from bill,product,user where bill.userId=user.userId and bill.proId=product.proId and Day(paidDate)='$ngay' and Month(paidDate)='$thang' and year(paidDate)='$nam' ";
		$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
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
					}else{
						echo "no bill at $str";
					}
		mysqli_close($db);
	}}
?>