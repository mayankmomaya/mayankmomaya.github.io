function validateForm() {

     var x = document.forms["myForm1"]["native"].value;
    if (x == null || x == "") {
	alert("The Native Place must be filled");
	return false;
	}
}