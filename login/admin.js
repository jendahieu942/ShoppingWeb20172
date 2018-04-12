//var form_sup=document.getElementById("form_insert_sup");
function insert_sup(e) {
	document.getElementById("error_id").innerHTML="";
	document.getElementById("error_name").innerHTML="";
	var id=document.getElementById("idsupplier").value;
	var name=document.getElementById("namesup").value;
	if(id == ""){
		document.getElementById("idsupplier").style.border="2px solid red";
		document.getElementById("error_id").innerHTML="id supplier is requierd!";
		document.getElementById("error_id").style.color="red";
		return false;
	}else{
		if(id.length > 10){
			document.getElementById("idsupplier").style.border="2px solid red";
			document.getElementById("error_id").innerHTML="id supplier must be under 10 characters!";
			document.getElementById("error_id").style.color="red";
			return false;
		}else{
			if(name == ""){
				document.getElementById("namesup").style.border="2px solid red";
				document.getElementById("error_name").innerHTML="name supplier is requierd!";
				document.getElementById("error_name").style.color="red";
				return false;
			}
		}
	}
	return true;
}
//var form_pro=document.getElementById("form_insert_pro");
function insert_pro(e) {
	document.getElementById("error_id1").innerHTML="";
	document.getElementById("error_name1").innerHTML="";
	document.getElementById("error_price").innerHTML="";
	document.getElementById("error_image").innerHTML="";
	var id=document.getElementById("idpro").value;
	var name=document.getElementById("namepro").value;
	var price=document.getElementById("idprice").value;
	var file=document.getElementById("file").value;
	var quan=document.getElementById("idquantity").value;
	if(id == ""){
		document.getElementById("idpro").style.border="2px solid red";
		document.getElementById("error_id1").innerHTML="id product is requierd!";
		document.getElementById("error_id1").style.color="red";
		return false;
	}else{
		if(id.length > 10){
			document.getElementById("idpro").style.border="2px solid red";
			document.getElementById("error_id1").innerHTML="id product must be under 10 characters!";
			document.getElementById("error_id1").style.color="red";
			return false;
		}else{
			if(name == ""){
				document.getElementById("namepro").style.border="2px solid red";
				document.getElementById("error_name1").innerHTML="name product is requierd!";
				document.getElementById("error_name1").style.color="red";
				return false;
			}
		}
	}
	if(quan == ""){
		document.getElementById("idquantity").value="0";
	}
	pattern =/^[0-9]+$/m;
	if(price == "" || !pattern.test(price)){
		document.getElementById("idprice").value="0";
	}
	return true;
}
function test(e) {
	return alert('dc r');
}