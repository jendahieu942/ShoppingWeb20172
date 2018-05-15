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