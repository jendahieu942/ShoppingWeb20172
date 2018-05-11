$(document).ready(function(){
    $('#loginform').submit( function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: '/ShoppingWeb20172/assets/process/login-process.php',
            data: $(this).serialize(),
            success: function (data) {
                if(data == 1){
                    window.location = "/ShoppingWeb20172/index.php";
                } else {
                    alert("FAILED: User or password was not corrected");
                }
            }
        })
    }); 
});