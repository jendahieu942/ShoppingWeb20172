<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/ShoppingWeb20172/assets/css/style.css">
    <title id="title" ></title>
    <style>
        .img-product{
            background-color: blue;
            width: 250px;
            height: 300px;
        }
        .img-product1{
            background-color: red;
            width: 100px;
            height: 100px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .flex-row-table{
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
<?php include '../view/navbar.php';?>

<div class="container">
    <div class= "row"> 
        <div class = "col-md-3">
            <div class = "img-product"> abc </div>

        </div>
        <div class = "col-md-9 flex-row-table">
            <div class = "img-product1"> abc </div>
            <div class = "img-product"> abc </div>
            <div class = "img-product1"> abc </div>
            <div class = "img-product"> abc </div>
            <div class = "img-product1"> abc </div>
        </div>
    </div>
</div>

<!-- Javascript file-->
<!--Core JavaScript file  -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="assets/js/bootstrap.js"></script>
<!-- /javascript file -->
<script src="/ShoppingWeb20172/assets/js/logout.js"></script>
</body>
</html>