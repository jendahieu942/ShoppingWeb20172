<!DOCTYPE html>
<html>
<head>
    <title>Sign up page - G13MoblieShop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .colorme{
        background-color: #156beb;
        color: white;
        border-radius: 5px 5px 0px 0px;
    }
    </style>
</head>

<!--Content-->
<body background="assets/img/signup.jpg">
    <!--Modal Sign Up-->
        <div class="modal-dialog">
            <!--modal content-->
            <div class="modal-content">
                <div class="modal-header colorme">
                    <h3 class="modal-title">Sign Up</h3>
                </div>
                
                <!--Modal body-->
                <div class="modal-body">
                    <form method="POST" id="signup-form" action="">
                        <!-- json response will be here-->
                        <div id="errorDiv"></div>
                        <!-- json response will be above-->
                        <br/>
                        <div class="modal-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
                                <input class="form-control" type="text" name="firstname" id="fistname" placeholder="First name" required>
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-right"></i></span>
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last name" required>
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input data-toggle="tooltip" data-placement="top" title="Your birthday" class="form-control" type="date" name="birthday" id="birthday">
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                                <input class="form-control" type="text" name="phone" id="phonenumber" placeholder="Phone">
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input class="form-control" type="text" name="address" id="address" placeholder="Address">
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control" type="text" name="username" id="username"required placeholder="User name">
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="	glyphicon glyphicon-lock"></i></span>
                                <input class="form-control" type="password" name="password" id="password" required placeholder="Password">
                                <span class="help-block" id="error">
                            </div>
                            <br/>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="	glyphicon glyphicon-lock"></i></span>
                                <input class="form-control" type="password" name="repassword" id="repassword" required placeholder="Re-Password">
                                <span class="help-block" id="error">
                            </div>
                            <hr/>
                            <p>Already a member? <a href="login.php"> Log In</a></p>
                            <input class='form-control btn-success' type ='submit' id="signup_button" name="signup-btn" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>