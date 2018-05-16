<?php 
    if(isset($_SESSION['userName'])){
        echo '<div data-spy="affix">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/ShoppingWeb20172/index.php">G13MobileShop</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li'?> <?php echo (strlen($_SERVER['REQUEST_URI'])===27) ? "class='active'" : "";?> <?php echo '><a href="/ShoppingWeb20172/index.php">Home</a></li>
                        <li><a href="/ShoppingWeb20172/index.php#apple">Apple</a></li>
                        <li><a href="/ShoppingWeb20172/index.php#samsung">Samsung</a></li>
                        <li><a href="/ShoppingWeb20172/index.php#other">Other</a></li>
                    </ul>
                    <div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">'.$_SESSION['name'].'
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <li><a href="/ShoppingWeb20172/view/userProfile.php">Profile</a></li>
                                    <li><a href="/ShoppingWeb20172/view/showPurchased.php">Purchased</a></li>
                                    <li class="divider"></li>
                                    <li id="logout"><a><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                                    </ul>
                            </li>
                            <li id="cart">
                                <a href="/ShoppingWeb20172/view/showcart.php">
                                    <span class="glyphicon glyphicon-shopping-cart" style="font-size:18px;"></span>
                                    <span class="num-cart" id="weight-cart">0<span>
                                </a>
                            </li>
                            <li><a></a></li>
                        </ul>
                    </div>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/ShoppingWeb20172/index.php">G13MobileShop</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li'?> <?php echo (strlen($_SERVER['REQUEST_URI'])===27) ? "class='active'" : "";?> <?php echo '><a href="/ShoppingWeb20172/index.php">Home</a></li>
                        <li><a href="/ShoppingWeb20172/index.php#apple">Apple</a></li>
                        <li><a href="/ShoppingWeb20172/index.php#samsung">Samsung</a></li>
                        <li><a href="/ShoppingWeb20172/index.php#other">Other</a></li>
                    </ul>
                    <div>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                            </li>
                            <li id="login"><a href="/ShoppingWeb20172/view/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>';
    }

?>