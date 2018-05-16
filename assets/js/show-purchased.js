$(document).ready(function load_purcharsed() {
    $.ajax({
        type: 'POST',
        url: '/ShoppingWeb20172/assets/process/show-purchased-process.php',
        data: null,
        success: function (data) {
            var cmd = "";
            var data = JSON.parse(data);
            var totalAmount = 0;
            var totalQuantity = 0;

            for (var index = 0; index < data.length; index++) {
                cmd +=  "<tr>"+
                    "<td>"+ parseInt(index+1) +"</td>"+
                    "<td>" +
                    "<img src='../" + data[index].img +"' alt= '" + data[index].img + "' style='width:128px;height:128px;'>" +
                    "<h4 style='color: #2ab27b'>"+ data[index].proName + "</h4>" +
                    "</td>"+
                    "<td>$"+ data[index].price + "</td>"+
                    "<td>"+ data[index].quantity + "</td>"+
                    "<td>$"+ parseInt(data[index].price * data[index].quantity) + "</td>"+
                    "<td>"+ data[index].paidDate + "</td>"+
                    "</tr>";
                totalAmount += parseInt(data[index].price * data[index].quantity);
                totalQuantity += parseInt(data[index].quantity);
            }
            cmd +=  "<tr>"+
                "<td colspan=8 style='text-align:right;font-size:16px;'><strong>Total quantity = "+totalQuantity+" product <a> and </a> Total price:  $"+totalAmount+"</strong></td>"+
                // "<td style='font-size:16px;'>$"+total+"</td>"+
                // "<td colspan=3 style='text-align:left;font-size:16px;'></td>"+
                "</tr>";
            $("#cart-table").append(cmd)
        }
    });
})
