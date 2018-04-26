<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Home Page - G13MobileShop</title>
    <style>
    .affix {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 10 !important;
    }

    .affix + .container-fluid {
        padding-top: 10px;
    }
    
    .content{
        background: ;
    }
    
    .redborder {
        border: 1px solid #79dd1b;
        box-shadow: 1px 2px 10px 1px #8dbdcf;
    }
    .resize {
        width: 90px;
        height: auto;
    }
    .product-box {
        box-sizing: border-box;
        width: 200px;
        height: 300px;
    }
    .slide{
        padding-top:30px;
    }
    </style>
</head>
<body>
<!--Nav bar-->
<?php 
    include 'navbar.php';
?>
<!--Main view end-->
<!-- Javascript file-->
<!--Core JavaScript file  -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="assets/js/bootstrap.js"></script>
<!-- /javascript file -->
<script src="/ShoppingWeb20172/assets/js/logout.js"></script>
</body>
</html>
