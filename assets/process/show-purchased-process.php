<?php
session_start();
include_once 'connection.php';
$userId = $_SESSION['id'];
$sql = "SELECT product.img, product.proName, product.price, bill.quantity, bill.paidDate, product.storage, product.srcSolution, product.supplier FROM bill, product WHERE bill.proId=product.proId and bill.userId = '$userId';";

$result = mysqli_query($conn,$sql);
$data = array();
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        array_push($data,$row);
    }
}
//echo var_dump($data);
$file = json_encode($data);
echo $file;

mysqli_close($conn);
?>