$(document).ready(function () {
    $('#addtocart').click( function (event) {
        event.preventDefault();
        var quantity = $('#quantity').val();
        var id = $('#quantity').attr('idproduct');
        var json = JSON.stringify({"id":id,"quantity":quantity})
        $.ajax({
            type: "POST",
            url: "/ShoppingWeb20172/assets/process/add-to-cart.php",
            data: json,
            success: function (data) {
                data = JSON.parse(data);
                console.log(data);  
                if(data.error == 1){
                    window.location.href = "/ShoppingWeb20172/login.php";
                } else {
                    alert("Added product to your cart successful");
                }
            }
        });
    })
})