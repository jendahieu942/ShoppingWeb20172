function load_samsung(){
    $.ajax({
        type: 'POST',
        url: 'assets/process/samsung-process.php',
        data: null,
        success: function (samsung) {
            var samsung  = JSON.parse(samsung);
            var cmd1 = '';
            for(var i =0; i< samsung.length;i++){
            cmd1 += '<div class="product-box">'+
                            '<img class="resize" src="'+samsung[i].img+'">'+
                            '<div class="caption">'+
                                '<h4><a href="#">'+samsung[i].proName+'</a></h4>'+
                                '<p>Price: <strong> $'+samsung[i].price+'</strong></p>'+
                            '</div>'+
                            '<div class="tool-div"><span>'+
                                '<a class="btn btn-success atc" id="" '+
                                'href="/ShoppingWeb20172/assets/process/add-to-cart.php'+
                                '?id='+samsung[i].proId+
                                '&name='+samsung[i].proName+
                                '&price='+samsung[i].price+'">Add to cart</a>'+
                                '<a class= "btn btn-default atc" id = "addtocart"'+
                                'href="view/view-detail.php'+
                                '?id='+samsung[i].proId+
                                '">View Detail</a></span>'+
                            '</div>'+
                        '</div>';
            }
            $('#samsung').html(cmd1);
        }
    });
}
function load_apple(){
    $.ajax({
        type: 'POST',
        url: 'assets/process/apple-process.php',
        data: null,
        success: function (apple) {
            var apple  = JSON.parse(apple);
            var cmd = '';
            for(var i =0; i< apple.length;i++){
            cmd +=  '<div class="product-box">'+
                            '<img class="resize" src="'+apple[i].img+'">'+
                            '<div class="caption">'+
                                '<h4><a href="#">'+apple[i].proName+'</a></h4>'+
                                '<p>Price: <strong> $'+apple[i].price+'</strong></p>'+
                            '</div>'+
                            '<div class = "tool-div"> <span><a class="btn btn-success atc" id="" '+
                                'href="/ShoppingWeb20172/assets/process/add-to-cart.php'+
                                '?id='+apple[i].proId+
                                '&name='+apple[i].proName+
                                '&price='+apple[i].price+'">Add to cart</a>'+
                                '<a class= "btn btn-default atc" id="showdt" href="view/view-detail.php'+
                                '?id='+apple[i].proId+
                                '">View Detail</a></span>'+
                            '</div>'+
                        '</div>';
            }
            $('#apple').html(cmd);
        }
    });
}

function load_other(){
    $.ajax({
        type: 'POST',
        url: 'assets/process/other-process.php',
        data: null,
        success: function (other) {
            var other  = JSON.parse(other);
            var cmd2 = '';
            for(var i =0; i< other.length;i++){
            cmd2 +=  '<div class="product-box">'+
                            '<img class="resize" src="'+other[i].img+'">'+
                            '<div class="caption">'+
                                '<h4><a href="#">'+other[i].proName+'</a></h4>'+
                                '<p>Price: <strong> $'+other[i].price+'</strong></p>'+
                            '</div>'+
                            '<div class = "tool-div"> <span><a class="btn btn-success atc" id="" '+
                                'href="/ShoppingWeb20172/assets/process/add-to-cart.php'+
                                '?id='+other[i].proId+
                                '&name='+other[i].proName+
                                '&price='+other[i].price+'">Add to cart</a>'+
                                '<a class= "btn btn-default atc" href="view/view-detail.php'+
                                '?id='+other[i].proId+
                                '">View Detail</a></span>'+
                            '</div>'+
                        '</div>';
            }
            $('#other').html(cmd2);
        }
    });
}

function show_product() {
    load_apple();
    load_samsung();
    load_other();
}

window.onload = show_product;