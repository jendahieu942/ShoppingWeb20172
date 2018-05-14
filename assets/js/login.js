$(document).ready(function(){
    $('#loginform').submit( function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: '/ShoppingWeb20172/assets/process/login-process.php',
            data: $(this).serialize(),
            success: function (data) {
                data = JSON.parse(data);
                console.log(data);
                if(data.ok){
                    window.location = data.ok;
                } else {
                    alert("FAILED: User or password was not corrected");
                }
            }
        })
    }); 
});