<?php
include_once 'connection.php';
    if(isset($_GET["id"]) && isset($_GET["quantity"])){
        if(($_GET['quantity']>0)){
            $sql = "UPDATE cart SET cart.quantity = ".$_GET['quantity']." WHERE cart.cartId= ".$_GET['cartId'];
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
    }

    if(isset($_GET['action'])){
        $sql = "DELETE from cart WHERE cart.cartId =".$_GET['cartId'];
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
?>