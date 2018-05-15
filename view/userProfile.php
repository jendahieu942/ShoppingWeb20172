<?php
session_start();
if(isset($_SESSION['userName'])):
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/ShoppingWeb20172/assets/css/style.css">
    <title>User's Profile Page</title>
    <style>
        .input.hidden {
            position: absolute;
            left: -9999px;
        }

        #profile-image1 {
            cursor: pointer;

            width: 100px;
            height: 100px;
            border:2px solid #03b1ce ;}
        .tital{ font-size:16px; font-weight:500;}
        .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}
    </style>
</head>
<body>
<!--    <div>-->
<?php include '../view/navbar.php'; ?>
    <div class="container" style="width: 172%">
        <div class="row">
            <div class="col-md-7 ">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center>
                            <h2> User's Profile </h2>
                        </center>
                    </div>
                    <div class="panel-body">
                        <div class="box box-info">
                            <div class="box-body">

                                <div class="col-sm-12">
                                    <div align="center">
                                        <img class="img-circle img-responsive" alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" >
                                        <input id="profile-image-upload" class="hidden" type="file">
                                        <div style="color:#999;" >Click to change avatar</div>
                                        <!--Upload Image Js And Css-->
                                    </div>
                                    <br/><br/><hr/>
                                </div>


                                <div class="col-sm-5 col-xs-6 tital " >User Name login</div>
                                <div class="col-sm-7 col-xs-6 " id= "userName"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >First Name</div>
                                <div class="col-sm-7" id="firstName"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Last Name</div>
                                <div class="col-sm-7" id="lastName"></div>
                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Email</div>
                                <div class="col-sm-7" id="email"></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>

                                <div class="col-sm-5 col-xs-6 tital " >Phone Number</div>
                                <div class="col-sm-7" id="phone"></div>

                                <div class="clearfix"></div>
                                <div class="bot-border"></div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>


                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    $('#profile-image1').on('click', function() {
                        $('#profile-image-upload').click();
                    });
                });
            </script>
        </div>
    </div>
</div>
<script src="/ShoppingWeb20172/assets/js/logout.js"></script>
<script src="/ShoppingWeb20172/assets/js/show-products.js"></script>
</body>
</html>

<?php
else: 
    header('location: /ShoppingWeb20172/view/login.php');
endif;
?>