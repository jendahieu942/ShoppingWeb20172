<?php
session_start();
if(isset($_SESSION['userName'])){
    $id = $_GET['id'];
    $proName = $_GET['name'];
    echo $id;
    echo $proName;
} else {
    header('Location: /ShoppingWeb20172/login.php');
}
?>