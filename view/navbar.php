<?php 
    if(isset($_SESSION['userName'])){
        echo '<div data-spy="affix">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.php">G13MobileShop</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./index.php">Home</a></li>
                </ul>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        </li>
                        <li id="acount"><a><span>Hello,'.$_SESSION['userName'].'</span></a></li>
                        <li id="cart"><a href="/ShoppingWeb20172/view/showcart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li id="logout"><a><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>';
    }
    else{
        echo '<div data-spy="affix">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.php">G13MobileShop</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./index.php">Home</a></li>
                </ul>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        </li>
                        <li id="login"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>';
    }

?>