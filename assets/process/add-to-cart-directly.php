<?php
session_start();
if(isset($_SESSION['userName'])){
    echo '<script type="text/javascript">alert("Them san pham thanh cong"); </script>';
    header('location: /ShoppingWeb20172/index.php');
} else {
    sleep(1);
    header('location: /ShoppingWeb20172/login.php');
}
?>