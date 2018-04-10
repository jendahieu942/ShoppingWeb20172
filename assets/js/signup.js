function login() {
    fname = document.getElementById("firstname");
    lname = document.getElementById("lastname");
    bday  = document.getElementById("birthday");
    email = document.getElementById("email");
    phone = document.getElementById("phone");
    address = document.getElementById("address");
    username = document.getElementById("username");
    password = document.getElementById("password");
    
    postcontent="fname="+fname+"&"+
                "lname="+lname+"&"+
                "bday=" +bday +"&"+
                "email="+email+"&"+
                "phone="+phone+"&"+
                "address="+address+"&"+
                "username="+address+"&"+
                "password="+password+"&";

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      } else {}  
    };
    xhttp.open("GET","login-process.php?"+postcontent,true);
    xhttp.send();
}