<?php
session_start();
include 'connection.php';
if(isset($_SESSION['userName'])){
    $userId = $_SESSION['id'];
    $sql = "SELECT quantity FROM cart WHERE userId = '$userId'";
    $result = mysqli_query($conn,$sql);

    $num_cart = 0;
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $num_cart += 1;
        }
    }
    echo $num_cart;
}
?>