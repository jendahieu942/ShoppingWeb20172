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
    <link rel="stylesheet" href="/ShoppingWeb20172/assets/css/style.css">
</head>
<body>

<!--Nav bar-->

<?php 
    include 'view/navbar.php';
?>

<div class="container slide">
        <form id="search" class="form-group col-md-12" action="/action_page.php">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
</div>

<!--Main view-->
<div class="container container-fluid">
    <div class="row">
        <div class="col-md-3" style="position:relative;">
            <div>
                <a class="list-group-item active"><b>Apple</b></a>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">IPhone 5 series</a>
                    </li>
                    <li class="list-group-item">
                            <a href="#">IPhone 6 series</a>
                    </li>
                    <li class="list-group-item">
                            <a href="#">IPhone 7 series</a>
                    </li>
                    <li class="list-group-item">
                            <a href="#">IPhone X series</a>
                    </li>
                </ul>
            </div>
            <div>
                <a class="list-group-item list-group-item-success"><b>SamSung</b></a>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Galaxy A series</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Galaxy S series</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Galaxy J series</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Galaxy Y series</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Galaxy Note series</a>
                    </li>
                </ul>
            </div>
            <hr/>
            <div>
                <a class="list-group-item list-group-item-warning"><b>China Mobile</b></a>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Oppo</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Xiaomi</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Huawei</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Vivo</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-md-9">
            <div>
                <ol class="breadcrumb" id="apple-bar">
                    <li><a href="#">Home</a></li>
                    <li class="active">Apple</li>
                </ol>
            </div>
            <div class="flex-container" id ="apple">
                        <!--Here display mobile info receive from PHP server-->
            </div>

            <div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">SamSung</li>
                </ol>
            </div>
            <div class="flex-container" id ="samsung">
                    <!--Here display mobile info receive from PHP server-->
            </div>

            <div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">China</li>
                </ol>
            </div>
            <div class="flex-container" id ="other">
                    <!--Here display mobile info receive from PHP server-->
            </div>
        </div>
    </div>
</div>
<!--Main view end-->
<!-- Javascript file-->
<!--Core JavaScript file  -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="assets/js/bootstrap.js"></script>
<!-- /javascript file -->
<script type="text/javascript" src="assets/js/logout.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
<script type="text/javascript" src="assets/js/show-products.js"></script>
</body>
</html>