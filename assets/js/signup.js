$(document).ready(function(){
    $('#signupform').submit(function(event){
        event.preventDefault();
        var password = $('#password').val();
        var repassword = $('#repassword').val();
        if(password != repassword){
            alert("Password and repassword was not match!");
        } else {
            $.ajax({
                type: 'POST',
                url: '/ShoppingWeb20172/assets/process/signup-process.php',
                data: $(this).serialize(),
                success: function (data) {
                    data = JSON.parse(data);
                    error = data[0].error;
                    if(error == "no_error"){
                        status = data[0].status;
                        if(status == "false"){
                            alert(status);
                        } else {
                            alert("Signed up new account.\nNow you need log in. to continue");
                            window.location = '/ShoppingWeb20172/login.php';
                        }
                    } else {
                        alert(error);
                    }
                }
            })
        }
    });
});