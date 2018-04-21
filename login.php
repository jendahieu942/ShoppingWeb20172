<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./dinhdang.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body style="background: #3366ff">
	<div class="modal-dialog">
        <!--modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Sign Up</h3>
            </div>
            <!--Modal body-->
            <div class="modal-body">
                <form method="POST" action="">
                    <!-- json response will be here-->
                    <div id="errorDiv"></div>
                    <!-- json response will be above-->
                    <div class="modal-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname" class="col-form-label">First name: </label>
                                <input class="form-control" type="text" name="firstname" id="fistname" placeholder="First name">
                                <span class="help-block" id="error">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname" class="col-form-label">Last name: </label>
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="">
                                <span class="help-block" id="error">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birthday" class="col-form-label">Date of birth: </label>
                            <input class="form-control" type="date" name="birthday" id="birthday">
                            <span class="help-block" id="error">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email: </label>
                            <input class="form-control" type="email" name="email" id="email">
                            <span class="help-block" id="error">
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-form-label">
                                <span class="glyphicon glyphicon-user"></span>User name:
                            </label>
                            <input class="form-control" type="text" name="username" id="username"required>
                            <span class="help-block" id="error">
                        </div>
                        <div class="form-group"> 
                            <label for="password" class="col-form-label">
                                <span class="glyphicon glyphicon-lock"></span>Password:
                            </label>
                            <input class="form-control" type="password" name="password" id="password" required>
                            <span class="help-block" id="error">
                        </div>
                        <div class="form-group">
                            <label for="repassword" class="col-form-label">
                                <span class="glyphicon glyphicon-lock"></span>Repeat Password:
                            </label>
                            <input class="form-control" type="password" name="repassword" id="repassword" required>
                            <span class="help-block" id="error">
                        </div>
                        <hr/>
                        <input class='form-control btn-success' type ='submit' id="signup_button" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
