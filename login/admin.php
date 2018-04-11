<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<script src=admin.js></script>
	<style type="text/css">
		#cover{
			height: 800px;
			width: 1200px;
			background-color: #99ff99;
			margin-right: auto;
			margin-left: auto;
		}
		#yeucau input{
			width: 250px;
			margin-left: 25px;
			height: 40px;
			font-size: 25px;
			background-color: #ffb84d;
		}
		#view input{
			width: 600px;
			margin-left: 25px;
			height: 40px;
			font-size: 25px;
			background-color: #ffb84d;
		}
		#yeucau{
			width: 300px;
			display: inline-block;
		}
		#view{
			width: 850px;
			display: inline-block;
			background-color: white;
		}
	</style>
	<?php 
		include "header_admin.php";
	?>
</head>
<body>
	<div id="cover">
		<h1>ADMIN PAGE</h1>
		<div id="yeucau">
			<form action="admin.php" method="post">
				<?php
					$db=mysqli_connect("localhost","root","","shoppingweb");
					$sql="select * from supplier";
					$result=mysqli_query($db,$sql,MYSQLI_USE_RESULT);
					while($row=mysqli_fetch_array($result)){
						$id=$row['idsupplier'];
						$name=$row['namesupplier'];
						echo "<input type='submit' name='$id' value='$name'><br>";
					}
					mysqli_close($db);
				?>
				<input type="submit" name="insert_supplier" value="ADD SUPPLIER"><br>
				<input type="submit" name="insert_product" value="ADD PRODUCT"><br>
			</form>
		</div>
		<div id="view">
			<?php
				include "view_admin.php";	
			?>
		</div>
	</div>
</body>
</html>