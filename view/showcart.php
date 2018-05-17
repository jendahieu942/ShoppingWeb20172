
<?php
session_start();
if(isset($_SESSION['userName'])):
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Show cart Page - G13MobileShop</title>
    <link rel="stylesheet" href="/ShoppingWeb20172/assets/css/style.css">
</head>
<body>
<!--Nav bar-->
<?php 
    include 'navbar.php';
?>
<!-- Main view-->
<div>
    <h3><center>List product in your cart</center></h3>
    <div class="table-reponsive">
        <table class="table" >
            <thead>
                <tr class='active'>
                    <th>#</th>
                    <th>Product image</th>
                    <th>Unit Price($)</th>
                    <th>Quantity</th>
                    <th>Amount($)</th>
                </tr>
            </thead>
            <tbody id="cart-table">
            </tbody>
        </table>
    </div>
</div>
<div id="purchase">

</div>
<!-- Javascript file-->
<script src="/ShoppingWeb20172/assets/js/logout.js"></script>
<script src="/ShoppingWeb20172/assets/js/show-products.js"></script>
<script src="/ShoppingWeb20172/assets/js/show-cart.js"></script>
</body>
</html>
<?php
else:
    $_SESSION['previouspage'] = $_SERVER['REQUEST_URI'];
    header('Location: /ShoppingWeb20172/view/login.php');
endif;
?>