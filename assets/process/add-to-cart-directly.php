<?php
session_start();
if(isset($_SESSION['userName'])){
    
} else {
    sleep(1);
    header('location: /ShoppingWeb20172/login.php');
}
?>