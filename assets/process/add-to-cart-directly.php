<?php
session_start();
include 'connection.php';
if(isset($_SESSION['userName'])){
    $proId = $_GET['id'];
    $userId = $_SESSION['id'];
    $sql = "SELECT * FROM cart WHERE proId = '$proId' AND userId = '$userId'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $quantity = $row['quantity'] + 1;
        $cartId = $row['cartId'];
        $updateSQL = "UPDATE cart SET quantity = '$quantity' WHERE cartId = $cartId";
        
        $uResult = mysqli_query($conn,$updateSQL);
        if(mysqli_num_rows($uResult) > 0){
            echo "Added successfull<br/>";
            echo "<br/>Directing to home page";
            header('location: /ShoppingWeb20172/index.php');
        }
    } else {
        echo "Chua mua sp nay";
    }
} else {
    sleep(1);
    header('location: /ShoppingWeb20172/login.php');
}
?>