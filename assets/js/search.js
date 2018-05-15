$(document).ready(function () {
    // var searchtags = [
    //     "iPhone 7", "iPhone 8", "iPhone 5" , "iPhone 4", "iPhone X", "Apple" , "iPhone",
    //     "Samsung Galaxy A3","Samsung Galaxy A5", "Samsung Galaxy A7", "Samsung Galaxy A8", "Samsung Galaxy S5", "Samsung Galaxy S6",
    //     "Samsung Galaxy S7", "Samsung Galaxy S8", "Samsung Galaxy S9", "Samsung Galaxy J2", "Samsung Galaxy J3","Samsung Galaxy J4",
    //     "Samsung Galaxy J5","Samsung Galaxy J7", "Samsung Galaxy J8", "Samsung Galaxy Y", "Samsung Galaxy Note",
    //     "Huawei", "Vivo", "OPPO",
    // ];
    // $("#textsearch").autocomplete({
    //     source: searchtags,
    // })

    $("#textsearch").keyup(function (event) {
        event.preventDefault();
        text = $("#textsearch").val();
        $("#search").submit();
    })
    $("#search").submit(function (event) {
        event.preventDefault();
        text = $("#textsearch").val();
        $.ajax({
            type: 'POST',
            url: '/ShoppingWeb20172/assets/process/search-process.php',
            data: $(this).serialize(),
            success: function (data) {
                var data = JSON.parse(data);
                var ipString = ssString = cnString = "";
                if(data.length <= 0){
                    $("#resultsearch").html("<font size=6 color=blue>No search result</font>");
                    $("#apple").empty();
                    $("#samsung").empty();
                    $("#other").empty();
                } else {
                    $("#resultsearch").empty();
                    data.forEach(element => {
                        htmlString = '<div class="product-box">'+
                                        '<img class="resize" src="'+element.img+'">'+
                                        '<div class="caption">'+
                                            '<h4><a href="#">'+element.proName+'</a></h4>'+
                                            '<p>Price: <strong> $'+element.price+'</strong></p>'+
                                        '</div>'+
                                        '<div class = "tool-div"> <span><a class="btn btn-success atc" id="" '+
                                            'href="/ShoppingWeb20172/assets/process/add-to-cart-directly.php'+
                                            '?id='+element.proId+
                                            '&name='+element.proName+
                                            '&price='+element.price+'">Add to cart</a>'+
                                            '<a class= "btn btn-default atc" id="showdt" href="view/view-detail.php'+
                                            '?id='+element.proId+
                                            '">View Detail</a></span>'+
                                        '</div>'+
                                    '</div>';
                        if(element.supplier == "Apple"){
                            ipString += htmlString;
                        } else if(element.supplier == "Samsung"){
                            ssString += htmlString;
                        } else {
                            cnString += htmlString;
                        }
                    });
                    $("#apple").html(ipString);
                    $("#samsung").html(ssString);
                    $("#other").html(cnString);
                    if(ipString == ""){
                        $("#apple").empty();
                    }
                    if(ssString == ""){
                        $("#samsung").empty();
                    }
                    if(cnString == ""){
                        $("#other").empty();
                    }
                }
            }
        })
    })
});