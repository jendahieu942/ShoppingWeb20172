<?php
$server = "localhost";
$user 	= "root";
$pass	= "12345";
$mydb	= "shoppingweb";
$target_dir = "assets/img/";

if(isset($_POST["update"])){
	//Save image to server
	$target_file = basename($_FILES['file']['name']);
	if(file_exists($target_dir.$target_file)){
		echo '<br/>File '.$target_file.' existed!<br/>';
	} else {
		if(copy($_FILES['file']['tmp_name'],$target_dir.$target_file)){
			echo '<br/>Uploaded img<br/>';
		} else {
			echo '<br/>Cannot upload file<br/>';
		}
	}
	//collect data
	$proName = $_POST['proName'];
	$supplier = $_POST['supplier'];
	$scrSolution = $_POST['scrSolution'];
	$storage = $_POST['storage'];
	$price 	 = $_POST['price'];
	$quantity= $_POST['quantity'];
	$img = $target_dir.$target_file;

	//Connect to server
	$connect = new mysqli($server,$user,$pass,$mydb);
	if($connect->connect_error){
		die("Connection failed: ".$connect->connect_error);
	} else {
		$sqlcmd = "INSERT INTO product VALUES(0,'$proName','$supplier','$srcSolution','$storage',$price,$quantity,'$img')";
		if($connect->query($sqlcmd)===TRUE){
			echo '<br/>added to database<br/>';
		} else {
			echo '<br/>Have a problem while trying to insert data<br/>';
		}
	}
	$connect->close();
}
?>
<html>
<head>
	<title>Shopping Web Administrator Page</title>
</head>
<body>
<font size = 6 color=blue>
ADD PRODUCT HERE:
</font>
<hr/>
<form method="POST" action="" enctype="multipart/form-data">
<table>
<tr><td>Prodct Name:</td>
<td>
<input type = "text" name="proName" placeholder="Product Name" required></td>
</tr>
<tr><td>Supllier:</td>
<td>
<input type = "text" name="supplier" placeholder="Supplier" required></td>
</tr>
<tr><td>Screen Solution:</td>
<td>
<input type="text" name="scrSolution" placeholder="Screen Solution"></td>
</tr>
<tr><td>Storage:</td>
<td><input type="text-field" name="storage" placeholder="Storage Device"></td>
</tr>
<tr><td>Price:</td>
<td><input type="number" name="price" placeholder="$"></td>
</tr>
<tr><td>Quantity:</td>
<td><input type="number" name="quantity" placeholder="100"><td>
</tr>
</table>
Image of Product: <input type="file" name="file" id="file"><br/>
<input type="submit" name="update" value="Add product">
</form>
</body>
</html>
