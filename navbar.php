    <!--Trigger the modal with link-->
    <div data-spy="affix">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.php">G13MobileShop</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./index.php">Home</a></li>
                </ul>
                <div id="account">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="login"><a data-toggle="modal" href="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li id="cart"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--Modal-->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-header">
                <button type = "button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
