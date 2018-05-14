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
<div class="col-md-9" style="width: 200%">
    <div class="row" >
        <div class="col-sm-6 col-md-6">
            <h3>Danh sách sản phẩm đã thêm vào giỏ hàng</h3>
            <table class="table table-hover" style="size: 1000px">
                <tr>
                    <th>#</th>
                    <th>Product image</th>
                    <th>Product name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Modify</th>
                </tr>
                <div id="resultcart"></div>
            </tabel>
        </div>
    </div>
</div>
<!-- Javascript file-->
<script src="/ShoppingWeb20172/assets/js/logout.js"></script>
</body>
</html>
<?php
else:
    $_SESSION['previouspage'] = $_SERVER['REQUEST_URI'];
    header('Location: /ShoppingWeb20172/login.php');
endif;
?>