function validateForm() {

     var x = document.forms["myForm3"]["name"].value;
    if (x == null || x == "") {
	alert("The Name must be filled");
	return false;
	}
	
	 var b = document.forms["myForm3"]["email"].value;
    if (b == null || b == "") {
	alert("The Email Address must be filled");
	return false;
	}
	
	var e = document.forms["myForm3"]["subject"].value;
    if (e == null || e == "") {
	alert("The Subject must be filled");
	return false;
	}
	
	var f = document.forms["myForm3"]["message"].value;
    if (f == null || f == "") {
	alert("The Message must be filled");
	return false;
	}
}