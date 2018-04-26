function load_data(){
    $.ajax({
        type: 'POST',
        url: '/ShoppingWeb20172/assets/process/apple-process.php',
        data: null,
        success: function (data) {
            var data  = JSON.parse(data);
            var cmd = '';
            for(var i =0; i< data.length;i++){
                cmd +=   '<div class="col-md-3 text-center col-md-6 col-xs-6">'+
                        '<div class="thumbnail product-box redborder">'+
                        '<img class= "resize" src="'+data[i].img+'">'+
                        '<div class="caption">'+
                            '<h4><a href="#">'+data[i].proName+'</a></h4>'+
                            '<p>Price: <strong> $'+data[i].price+'</strong></p>'+
                            '<a class="btn btn-success" id="" '+
                            'href="/ShoppingWeb20172/assets/process/add-to-cart.php'+
                            '?id='+data[i].proId+
                            '&name='+data[i].proName+
                            '&price='+data[i].price+'">Add to cart</a>'+
                        '</div>'+
                '</div>'+
            '</div>';
            }

            $('#apple').html(cmd);
        }
    })
}

window.onload = load_data;