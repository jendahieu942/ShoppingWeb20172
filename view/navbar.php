<?php 
    if(isset($_SESSION['userName'])){
        echo '<div data-spy="affix">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/ShoppingWeb20172/index.php">G13MobileShop</a>
                </div>
                <ul class="nav navbar-nav">
                    <li'?> <?php echo (strlen($_SERVER['REQUEST_URI'])===27) ? "class='active'" : "";?> <?php echo '><a href="/ShoppingWeb20172/index.php">Home</a></li>
                    <li><a href="/ShoppingWeb20172/index.php#apple">Apple</a></li>
                    <li><a href="/ShoppingWeb20172/index.php#samsung">Samsung</a></li>
                    <li><a href="/ShoppingWeb20172/index.php">Other</a></li>
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
                    <a class="navbar-brand" href="/ShoppingWeb20172/index.php">G13MobileShop</a>
                </div>
                <ul class="nav navbar-nav">
                    <li'?> <?php echo (strlen($_SERVER['REQUEST_URI'])===27) ? "class='active'" : "";?> <?php echo '><a href="/ShoppingWeb20172/index.php">Home</a></li>
                    <li><a href="/ShoppingWeb20172/index.php#apple">Apple</a></li>
                    <li><a href="/ShoppingWeb20172/index.php#samsung">Samsung</a></li>
                    <li><a href="/ShoppingWeb20172/index.php">Other</a></li>
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