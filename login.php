<!DOCTYPE html>
<html>
<head>
    <title>Sign up page - G13MoblieShop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    <script src="assets/js/login.js"></script>-->
    <style>
    .modal-header{
        background-color: #d439c0;
        color: white;
        text-align: center;
        border-radius: 5px 5px 0px 0px;
    }
    </style>
    <?php
        include "login/xulilogin.php";
    ?>
</head>

<!--Content-->
<body background="assets/img/signup.jpg">
    <!--Modal Sign Up-->
        <div class="modal-dialog">
            <!--modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Log In</h3>
                </div>
                
                <!--Modal body-->
                <div class="modal-body">
                    <form id="loginform" method="POST">
                        <!-- json response will be here-->
                        <div id="result"></div>
                        <!-- json response will be above-->
                        <br/>
                        <div class="modal-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control" type="text" name="username" id="username"required placeholder="User name">
                            </div>
                            <br/>
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="	glyphicon glyphicon-lock"></i></span>
                                <input class="form-control" type="password" name="password" id="password" required placeholder="Password">
                            </div>
                            <hr/>
                            <p>Do not have account? <a href="signup.php"> Sign Up</a></p>
                            <p>View product without login? <a href="index.php">Home page</a></p>
                            <input class='form-control btn-success' type ='submit' id="login_btn" name="login-btn" value = "Log In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>