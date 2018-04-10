function validateForm() {

     var x = document.forms["myForm2"]["fname"].value;
    if (x == null || x == "") {
	alert("The First Name must be filled");
	return false;
	}
    
    var y = document.forms["myForm2"]["lname"].value;
    if (y == null || y == "") {
	alert("The Last Name must be filled");
	return false;
	}
}