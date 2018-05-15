$(document).ready(function load_cart() {
    $.ajax({
        type: 'POST',
        url: '/ShoppingWeb20172/assets/process/show-cart-process.php',
        data: null,
        success: function (data) {
            var cmd = "";
            var data = JSON.parse(data);
            var total = 0;
            for (var index = 0; index < data.length; index++) {
                cmd +=  "<tr>"+
                            "<td><p>"+ parseInt(index+1) +"</p></td>"+
                            "<td><img class=\"img-cart\" src=\"/ShoppingWeb20172/"+ data[index].img +"\"></td>"+
                            "<td><p>"+ data[index].proName + "</p></td>"+
                            "<td><p>$"+ data[index].price + "</p></td>"+
                            "<td><p>"+ data[index].quantity+ "</p></td>"+
                            "<td><p>$"+ parseInt(data[index].price * data[index].quantity) + "</p></td>"+
                        "</tr>";
                total += parseInt(data[index].price * data[index].quantity);
            }
            cmd +=  "<tr>"+
                        "<td></td>"+
                        "<td colspan=4 style='text-align:right;font-size:16px;'><strong>Total = </strong></td>"+
                        "<td style='font-size:16px;'>$"+total+"</td>"+
                    "</tr>";
            $("#cart-table").append(cmd);
        }
    });
})




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