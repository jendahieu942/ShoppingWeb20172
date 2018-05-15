$(document).ready(function(){
    var passlength = 0;
    var userlength = 0;
    $("#username").keyup(function (event) {
        event.preventDefault();
        if($('#username').val()=="" || $('#username').val().length != userlength){
            $('#error').hide();            
        }
    });

    $("#password").keyup(function (event) {
        event.preventDefault();
        if($('#password').val()=="" || $('#password').val().length != passlength){
            $('#error').hide();            
        }
    });

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
                    passlength = $('#password').val().length;
                    userlength = $('#username').val().length;
                    $('#error').show();
                    $('#error').addClass("alert alert-danger");
                    $('#error').html("<strong>Error:</strong><span>User or password was not corrected</span>");
                    $("#password").select();
                }   
            }
        })
    }); 
});