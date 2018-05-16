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
                    "<td>"+ parseInt(index+1) +"</td>"+
                    // "<td>"+ data[index].img +"</td>"+
                    "<td>" +
                    "<img src='../" + data[index].img +"' alt= '" + data[index].img + "' style='width:128px;height:128px;'>" +
                    "<h4 style='color: #2ab27b'>"+ data[index].proName + "</h4>" +
                    "</td>"+
                    "<td>$"+ data[index].price + "</td>"+
                    "<td>"+ data[index].quantity+ "</td>"+
                    "<td>$"+ parseInt(data[index].price * data[index].quantity) + "</td>"+
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
