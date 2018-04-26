$(document).ready(function(){
    $('#logout').click(function(event){
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/ShoppingWeb20172/assets/process/logout-process.php',
            data: null,
            success: function(data) {
                if(data == 1){
                    alert("Goobye!");
                    window.location = '/ShoppingWeb20172/index.php';
                }
            }
        });
    });
});