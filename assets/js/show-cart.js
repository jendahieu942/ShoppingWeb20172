$(document).ready(function () {
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
                            "<td style='text-align:center;'>" +
                                "<img src='../" + data[index].img +"' alt= '" + data[index].img + "' class='img-cart'>" +
                                "<h5 style='color: #2ab27b'>"+ data[index].proName + "</h5>" +
                            "</td>"+
                            "<td>$"+ data[index].price + "</td>"+
                            "<td id='quantity-cell'>" +
                                "<input type='number' name='quantity_" +index+"' id='quantity_"+index+"' value='"+data[index].quantity+"'>" +
                                "<div>" +
                                    "<a class='btn btn-default' href = 'javascript:void(0)' onclick='updateItem("+index+","+data[index].cartId+")' style='color: #156beb'>update </a>" +
                                    "<a class='btn btn-warning' href = 'javascript:void(0)' onclick='deleteItem("+index+","+data[index].cartId+")' style='color: red'> delete</a>" +
                                "</div>"+
                            "</td>"+
                            "<td>$"+ parseInt(data[index].price * data[index].quantity) + "</td>"+
                            "</tr>";
                        total += parseInt(data[index].price * data[index].quantity);
                    }
                    cmd +=  "<tr class='active'>"+
                                "<td></td>"+
                                "<td colspan=3 style='text-align:right;font-size:16px;'><strong>Total = </strong></td>"+
                                "<td style='font-size:16px;'>$"+total+"</td>"+
                            "</tr>";
            $("#cart-table").append(cmd);
        }
    });
})
function purchase(){
    
}
function updateItem(id, cartId) {
    quantity = $("#quantity_"+id).val();
    $.get("../assets/process/cart-modify.php",{"id":id,"cartId":cartId,"quantity":quantity}, function(data){
        location.reload();
    });
    // location.reload();
    // alert(quantity);
}
function deleteItem(id, cartId) {
    del = "delete";
    $.get("../assets/process/cart-modify.php",{"id":id,"cartId":cartId,"action":del}, function(data){
        location.reload();
    });
}