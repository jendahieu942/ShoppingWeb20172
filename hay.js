function xuli(e){
	var username=document.getElementById('idusername');
	var password=document.getElementById('idpassword');
	var name=username.value;
	var pass=password.value;
	
	if(name == ""){
		username.style.border="1px solid red";
		document.getElementById('username_error').innerHTML="username is required!";
		document.getElementById('username_error').style.color="red";
		return false;
	}else{
		pattern=/^[a-zA-Z0-9]{6,20}$/m;
		if(!pattern.test(name) ){
			username.style.border="1px solid red";
			document.getElementById('username_error').innerHTML="Username must be from 6 to 20 characters (letters or digits)";
			document.getElementById('username_error').style.color="red";
			return false;
		}else{
			if(pass == ""){
				password.style.border="1px solid red";
				document.getElementById('password_error').innerHTML="password is required!";
				document.getElementById('password_error').style.color="red";
				return false;
			}
		}
	}
	return true;
}
function xulidangki(e){
	var username=document.getElementById("idusername").value;
	var password=document.getElementById("idpassword").value;
	var email=document.getElementById("idemail").value;
	var phone=document.getElementById("idphone").value;
	var address=document.getElementById("idaddress").value;
	document.getElementById("username_error").innerHTML="";
	document.getElementById("password_error").innerHTML="";
	document.getElementById("email_error").innerHTML="";
	document.getElementById("phone_error").innerHTML="";
	document.getElementById("idusername").style.border="1px solid black";
	document.getElementById("idpassword").style.border="1px solid black";
	document.getElementById("idemail").style.border="1px solid black";
	document.getElementById("idphone").style.border="1px solid black";
	var patternemail=/^([a-zA-Z0-9_-]+)(@)([a-z\.]+)$/g;
	var patterphone=/^[0-9]{10,11}$/g;
	var patter=/^[a-zA-Z0-9]{6,20}$/g;
	var patterpass=/^(.+){6,20}$/g;
	if(username==""){
		document.getElementById("idusername").style.border="1px solid red";
		document.getElementById("username_error").innerHTML="username is required";
		document.getElementById("username_error").style.color="red";
		return false;
	}else{
		if(!patter.test(username)){
			document.getElementById("idusername").style.border="1px solid red";
			document.getElementById("username_error").innerHTML="Username must be from 6 to 20 characters (letters or digits)";
			document.getElementById("username_error").style.color="red";
			return false;
		}else{
			if(password==""){
				document.getElementById("idpassword").style.border="1px solid red";
				document.getElementById("password_error").innerHTML="password is required";
				document.getElementById("password_error").style.color="red";
				return false;
			}else{
				if(!patterpass.test(password)){
					document.getElementById("idpassword").style.border="1px solid red";
					document.getElementById("password_error").innerHTML="Password must be from 6 to 20 characters";
					document.getElementById("password_error").style.color="red";
					return false;
				}else{
					if((email !="") && (!patternemail.test(email))){
						document.getElementById("idemail").style.border="1px solid red";
						document.getElementById("email_error").innerHTML="email is invalid";
						document.getElementById("email_error").style.color="red";
						return false;
					}else{
						if((phone !="")&&(!patterphone.test(phone))){
							document.getElementById("idphone").style.border="1px solid red";
							document.getElementById("phone_error").innerHTML="phone is invalid";
							document.getElementById("phone_error").style.color="red";
							return false;
						}
					}
				}
			}
		}
	}
	return true;
}
