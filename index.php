<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" >
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet">
    <title>G13 Shopping Website</title>
</head>
<body>
<!--Nav bar-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <span></span>
        <a class="navbar-brand" href="#">
            <strong>G13</strong>Mobile
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id="SignUp">
            <a data-toggle="modal" href="#myLogin">
            <span class="glyphicon glyphicon-user"></span>
             Login
            </a>
        </li>
        <li><a data-toggle="modal" href="#mySignUp">
            <span class="glyphicon glyphicon-log-in"></span> SignUp
            </a>
        </li>
        </ul>
        <!--Modal Sign Up-->
        <div class="modal fade" id="mySignUp" role="dialog">
            <div class="modal-dialog">
                <!--modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Sign Up</h3>
                    </div>
                    <div class="modal-body">
                       <!--Modal body-->
                       <form method="POST" action="sinup-process.php">
                           <div class="modal-group">
                                <label for="firstname" class="col-form-label">First Name: </label>
                                <input class="form-control" type="text" name="firstname" id="fistname" placeholder="First name">
                                
                                <label for="lastname" class="col-form-label">Last Name: </label>
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="">

                                <label for="birthday" class="col-form-label">Date of birth: </label>
                                <input class="form-control" type="date" name="birthday" id="birthday">

                                <label for="email" class="col-form-label">Email: </label>
                                <input class="form-control" type="email" name="email" id="email">

                                <label for="phone" class="col-form-label">Phone Number: </label>
                                <input class="form-control" type="tel" name="phone" id="phone">

                                <label for="address" class="col-form-label">Address: </label>
                                <input class="form-control" type="text" name="address" id="address">

                                <label for="username" class="col-form-label">
                                    <span class="glyphicon glyphicon-user"></span>User name:
                                </label>
                                <input class="form-control" type="text" name="username" id="username"required>
                                
                                <label for="password" class="col-form-label">
                                    <span class="glyphicon glyphicon-lock"></span>Password:
                                </label>
                                <input class="form-control" type="password" name="password" id="password" required>
                                
                                <input class="form-control" type="submit" value="Sign Up" id="signup">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                            <span><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></span>
                    </div>
                </div>
            </div>
        </div>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> SignUp</a></li>
      </ul>
    </div>
  </nav>
<!-- /nav bar-->
<!--Main view-->
<div class="container margintop">
    <!-- Slideshow might be here-->
    <div>

    </div>
    <div class="row">
        <div class="col-md-3">
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
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Apple</li>
                </ol>
            </div>
            <div class="row">
                    <!--Here display mobile info-->
                    <?php include 'assets/process/apple-process.php'?>
            </div>
            <div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">SamSung</li>
                    </ol>
                </div>
                <div class="row" id ="product">
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
<!--Slider JavaScript file  -->
<script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
<script src="assets/ItemSlider/js/jquery.catslider.js"></script>
<!-- /javascript file -->
<script src="assets/js/signup.js"></script>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
</body>
</html>