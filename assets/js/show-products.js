function load_samsung(){
    $.ajax({
        type: 'POST',
        url: 'assets/process/samsung-process.php',
        data: null,
        success: function (samsung) {
            var samsung  = JSON.parse(samsung);
            var cmd1 = '';
            for(var i =0; i< samsung.length;i++){
            cmd1 += '<div class="thumbnail product-box redborder">'+
                            '<img class="resize" src="'+samsung[i].img+'">'+
                            '<div class="caption">'+
                                '<h4><a href="#">'+samsung[i].proName+'</a></h4>'+
                                '<p>Price: <strong> $'+samsung[i].price+'</strong></p>'+
                                '<a class="btn btn-success" id="" '+
                                'href="/ShoppingWeb20172/assets/process/add-to-cart.php'+
                                '?id='+samsung[i].proId+
                                '&name='+samsung[i].proName+
                                '&price='+samsung[i].price+'">Add to cart</a>'+
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
            cmd +=  '<div class="thumbnail product-box redborder">'+
                            '<img class="resize" src="'+apple[i].img+'">'+
                            '<div class="caption">'+
                                '<h4><a href="#">'+apple[i].proName+'</a></h4>'+
                                '<p>Price: <strong> $'+apple[i].price+'</strong></p>'+
                                '<a class="btn btn-success" id="" '+
                                'href="/ShoppingWeb20172/assets/process/add-to-cart.php'+
                                '?id='+apple[i].proId+
                                '&name='+apple[i].proName+
                                '&price='+apple[i].price+'">Add to cart</a>'+
                            '</div>'+
                        '</div>';
            }
            $('#apple').html(cmd);
        }
    });
}

function show_product() {
    load_apple();
    load_samsung();
}

window.onload = show_product;