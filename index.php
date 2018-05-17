<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <title>Home Page - G13MobileShop</title>
    <link rel="stylesheet" href="/ShoppingWeb20172/assets/css/style.css">
</head>
<body>

<!--Nav bar-->

<?php 
    include 'view/navbar.php';
    include 'view/search.php';
?>
<!--Main view-->
<div class="container container-fluid">
    <div class="row">
        <div class="col-md-3" style="position:relative;">
            <div>
                <a class="list-group-item active"><b>Apple</b></a>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a id="iPhone5">IPhone 5 series</a>
                    </li>
                    <li class="list-group-item">
                        <a id="iPhone6">IPhone 6 series</a>
                    </li>
                    <li class="list-group-item">
                        <a id="iPhone7">IPhone 7 series</a>
                    </li>
                    <li class="list-group-item">
                        <a id="iPhoneX">IPhone X series</a>
                    </li>
                </ul>
            </div>
            <div>
                <a class="list-group-item list-group-item-success"><b>SamSung</b></a>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a id="galaxyA">Galaxy A series</a>
                    </li>
                    <li class="list-group-item">
                        <a id="galaxyS">Galaxy S series</a>
                    </li>
                    <li class="list-group-item">
                        <a id="galaxyJ">Galaxy J series</a>
                    </li>
                    <li class="list-group-item">
                        <a id="galaxyY">Galaxy Y series</a>
                    </li>
                    <li class="list-group-item">
                        <a id="galaxyNote">Galaxy Note series</a>
                    </li>
                </ul>
            </div>
            <hr/>
            <div>
                <a class="list-group-item list-group-item-warning"><b>China Mobile</b></a>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a id="oppo">Oppo</a>
                    </li>
                    <li class="list-group-item">
                        <a id="xiaomi">Xiaomi</a>
                    </li>
                    <li class="list-group-item">
                        <a id="huawei">Huawei</a>
                    </li>
                    <li class="list-group-item">
                        <a id="vivo">Vivo</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-md-9" id= "showproduct">
            <div id="resultsearch" style="text-align:center;">
            </div>
            <div>
                <ol class="breadcrumb" id="apple-bar">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li class="active">Apple</li>
                </ol>
            </div>
            
            <div class = "product-page papple">
                <div class="flex-container" id ="apple">
                            <!--Here display mobile info receive from PHP server-->
                </div>
                <div class="text-center">
                    <ul class="pagination iPage" style="margin-top: 0px;margin-bottom:0px;">
                        <li id="iprevious-page" class="disabled">
                        <a href="javascript:void(0)" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>

            <br/>
            <div>
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li class="active">SamSung</li>
                </ol>
            </div>
            <div class="product-page psamsung">
                <div class="flex-container" id ="samsung">
                        <!--Here display mobile info receive from PHP server-->
                </div>
                <div class="text-center">
                    <ul class="pagination sPage" style="margin-top: 0px;margin-bottom:0px;">
                        <li id="sprevious-page" class="disabled">
                        <a href="javascript:void(0)" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>            

            <br/>
            <div>
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li class="active">China</li>
                </ol>
            </div>
            <div class="product-page pother">
                <div class="flex-container" id ="other">
                        <!--Here display mobile info receive from PHP server-->
                </div>
                <div class="text-center">
                    <ul class="pagination oPage" style="margin-top: 0px;margin-bottom:0px;">
                        <li id="oprevious-page" class="disabled">
                        <a href="javascript:void(0)" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main view end-->
<?php
include_once 'view/footer.html';
?>
<!-- Javascript file-->
<script type="text/javascript" src="assets/js/logout.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
<script type="text/javascript" src="assets/js/search.js"></script>
<script type="text/javascript" src="assets/js/left-list-click.js"></script>
<script type="text/javascript" src="assets/js/show-products.js"></script>
</body>
</html>