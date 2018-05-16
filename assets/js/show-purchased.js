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
                    '<h4><a href="view/view-detail.php'+
                    '?id='+samsung[i].proId+
                    '">'+samsung[i].proName+'</a></h4>'+
                    '<p>Price: <strong> $'+samsung[i].price+'</strong></p>'+
                    '</div>'+
                    '<div class="tool-div"><span>'+
                    '<a class="btn btn-success atc" id="" '+
                    'href="/ShoppingWeb20172/assets/process/add-to-cart-directly.php'+
                    '?id='+samsung[i].proId+
                    '&name='+samsung[i].proName+
                    '&price='+samsung[i].price+'">Add to cart</a>'+
                    '<a class= "btn btn-default atc" id = "showdt"'+
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
                    '<h4><a href="view/view-detail.php'+
                    '?id='+apple[i].proId+
                    '">'+apple[i].proName+'</a></h4>'+
                    '<p>Price: <strong> $'+apple[i].price+'</strong></p>'+
                    '</div>'+
                    '<div class = "tool-div"> <span><a class="btn btn-success atc" id="" '+
                    'href="/ShoppingWeb20172/assets/process/add-to-cart-directly.php'+
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
                    '<h4><a href="view/view-detail.php'+
                    '?id='+other[i].proId+
                    '">'+other[i].proName+'</a></h4>'+
                    '<p>Price: <strong> $'+other[i].price+'</strong></p>'+
                    '</div>'+
                    '<div class = "tool-div"> <span><a class="btn btn-success atc" id="" '+
                    'href="/ShoppingWeb20172/assets/process/add-to-cart-directly.php'+
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

function update_cart() {
    $.ajax({
        type: 'POST',
        url: '/ShoppingWeb20172/assets/process/update_cart.php',
        data: null,
        success: function (data) {
            $("#weight-cart").text(data);
        }
    });
}

function load_apple_pagination(){
    var numberOfItems = $('#apple .product-box').length;
    var limitItem = 4;
    $('#apple .product-box:gt('+ (limitItem-1) + ')').hide();
    var totalPages = Math.round(numberOfItems/limitItem);

    $('.pagination.iPage').append('<li class="current-page active"><a href="javascript:void(0)">'+1+'</a></li>');
    for (let index = 2; index <= totalPages; index++) {
        $('.pagination.iPage').append('<li class="current-page"><a href="javascript:void(0)">'+index+'</a></li>');
    }

    $('.pagination.iPage').append('<li id = "inext-page"><a href="javascript:void(0)" aria-label="Next">'+
        '<span aria-hidden="true">»</span>'+
        '</a></li>');

    $('.pagination.iPage li.current-page').on('click', function () {
        if($(this).hasClass('active')){
            return false;
        } else {
            var currentPage = $(this).index();
            if(currentPage == 1){
                $('.pagination.iPage li#iprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.iPage li#inext-page').addClass('disabled');
            } else {
                $('.pagination.iPage li').removeClass('disabled');
            }
            $('.pagination.iPage li').removeClass("active");
            $(this).addClass('active');
            $('#apple .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#apple .product-box:eq('+ i +')').show();
            }
        }
    });

    $('#inext-page').on('click', function () {
        var currentPage = $('.pagination.iPage li.active').index() + 1;
        if(currentPage == totalPages + 1) {
            return false;
        } else {
            if(currentPage == 1){
                $('.pagination.iPage li#iprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.iPage li#inext-page').addClass('disabled');
            } else {
                $('.pagination.iPage li').removeClass('disabled');
            }
            $('.pagination.iPage li').removeClass("active");
            $('.pagination.iPage li.current-page:eq('+ (currentPage - 1) +')').addClass('active');
            $('#apple .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#apple .product-box:eq('+ i +')').show();
            }
        }
    });

    $('#iprevious-page').on('click', function () {
        var currentPage = $('.pagination.iPage li.active').index() - 1;
        if(currentPage == 0){
            return false;
        } else {
            if(currentPage == 1){
                $('.pagination.iPage li#iprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.iPage li#inext-page').addClass('disabled');
            } else {
                $('.pagination.iPage li').removeClass('disabled');
            }
            $('.pagination.iPage li').removeClass("active");
            $('.pagination.iPage li.current-page:eq('+ (currentPage-1) +')').addClass('active');
            $('#apple .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#apple .product-box:eq('+ i +')').show();
            }
        }
    });

}

function load_samsung_pagination(){
    var numberOfItems = $('#samsung .product-box').length;
    var limitItem = 4;
    $('#samsung .product-box:gt('+ (limitItem-1) + ')').hide();
    var totalPages = Math.round(numberOfItems/limitItem);

    $('.pagination.sPage').append('<li class="current-page active"><a href="javascript:void(0)">'+1+'</a></li>');
    for (let index = 2; index <= totalPages; index++) {
        $('.pagination.sPage').append('<li class="current-page"><a href="javascript:void(0)">'+index+'</a></li>');
    }

    $('.pagination.sPage').append('<li id = "snext-page"><a href="javascript:void(0)" aria-label="Next">'+
        '<span aria-hidden="true">»</span>'+
        '</a></li>');

    $('.pagination.sPage li.current-page').on('click', function () {
        if($(this).hasClass('active')){
            return false;
        } else {
            var currentPage = $(this).index();
            if(currentPage == 1){
                $('.pagination.sPage li#sprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.sPage li#snext-page').addClass('disabled');
            } else {
                $('.pagination.sPage li').removeClass('disabled');
            }
            $('.pagination.sPage li').removeClass("active");
            $(this).addClass('active');
            $('#samsung .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#samsung .product-box:eq('+ i +')').show();
            }
        }
    });

    $('#snext-page').on('click', function () {
        var currentPage = $('.pagination.sPage li.active').index() + 1;
        if(currentPage == totalPages + 1) {
            return false;
        } else {
            if(currentPage == 1){
                $('.pagination.sPage li#sprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.sPage li#snext-page').addClass('disabled');
            } else {
                $('.pagination.sPage li').removeClass('disabled');
            }
            $('.pagination.sPage li').removeClass("active");
            $('.pagination.sPage li.current-page:eq('+ (currentPage - 1) +')').addClass('active');
            $('#samsung .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#samsung .product-box:eq('+ i +')').show();
            }
        }
    });

    $('#sprevious-page').on('click', function () {
        var currentPage = $('.pagination.sPage li.active').index() - 1;
        if(currentPage == 0){
            return false;
        } else {
            if(currentPage == 1){
                $('.pagination.sPage li#sprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.sPage li#snext-page').addClass('disabled');
            } else {
                $('.pagination.sPage li').removeClass('disabled');
            }
            $('.pagination.sPage li').removeClass("active");
            $('.pagination.sPage li.current-page:eq('+ (currentPage-1) +')').addClass('active');
            $('#samsung .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#samsung .product-box:eq('+ i +')').show();
            }
        }
    });

}

function load_other_pagination(){
    var numberOfItems = $('#other .product-box').length;
    var limitItem = 4;
    $('#other .product-box:gt('+ (limitItem-1) + ')').hide();
    var totalPages = Math.round(numberOfItems/limitItem);

    $('.pagination.oPage').append('<li class="current-page active"><a href="javascript:void(0)">'+1+'</a></li>');
    for (let index = 2; index <= totalPages; index++) {
        $('.pagination.oPage').append('<li class="current-page"><a href="javascript:void(0)">'+index+'</a></li>');
    }

    $('.pagination.oPage').append('<li id = "onext-page"><a href="javascript:void(0)" aria-label="Next">'+
        '<span aria-hidden="true">»</span>'+
        '</a></li>');

    $('.pagination.oPage li.current-page').on('click', function () {
        if($(this).hasClass('active')){
            return false;
        } else {
            var currentPage = $(this).index();
            if(currentPage == 1){
                $('.pagination.oPage li#oprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.oPage li#onext-page').addClass('disabled');
            } else {
                $('.pagination.oPage li').removeClass('disabled');
            }
            $('.pagination.oPage li').removeClass("active");
            $(this).addClass('active');
            $('#other .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#other .product-box:eq('+ i +')').show();
            }
        }
    });

    $('#onext-page').on('click', function () {
        var currentPage = $('.pagination.oPage li.active').index() + 1;
        if(currentPage == totalPages + 1) {
            return false;
        } else {
            if(currentPage == 1){
                $('.pagination.oPage li#oprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.oPage li#onext-page').addClass('disabled');
            } else {
                $('.pagination.oPage li').removeClass('disabled');
            }
            $('.pagination.oPage li').removeClass("active");
            $('.pagination.oPage li.current-page:eq('+ (currentPage - 1) +')').addClass('active');
            $('#other .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#other .product-box:eq('+ i +')').show();
            }
        }
    });

    $('#oprevious-page').on('click', function () {
        var currentPage = $('.pagination.oPage li.active').index() - 1;
        if(currentPage == 0){
            return false;
        } else {
            if(currentPage == 1){
                $('.pagination.oPage li#oprevious-page').addClass('disabled');
            } else if(currentPage == totalPages){
                $('.pagination.oPage li#onext-page').addClass('disabled');
            } else {
                $('.pagination.oPage li').removeClass('disabled');
            }
            $('.pagination.oPage li').removeClass("active");
            $('.pagination.oPage li.current-page:eq('+ (currentPage-1) +')').addClass('active');
            $('#other .product-box').hide();
            var grandTotal = limitItem*currentPage;
            for (var i = grandTotal - limitItem; i < grandTotal; i++) {
                $('#other .product-box:eq('+ i +')').show();
            }
        }
    });

}

function load_product(){
    load_apple();
    load_samsung();
    load_other();
    update_cart();
}

function load_pagination() {
    load_apple_pagination();
    load_samsung_pagination();
    load_other_pagination();
}
$(document).ready(function (){
    load_product();
    $.when($.ajax()).then(load_pagination);
})