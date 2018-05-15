<?php
session_start();
include_once 'connection.php';
$userId = $_SESSION['id'];
$sql = "SELECT product.img, product.proName, product.price, cart.quantity FROM cart,product WHERE userId = '$userId' AND product.proId = cart.proId";

$result = mysqli_query($conn,$sql);
$data = array();
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        array_push($data,$row);
    }
}

$file = json_encode($data);
echo $file;

mysqli_close($conn);
?>