function validateForm() {

     var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
	alert("The First Name must be filled");
	return false;
	}
	
	 var b = document.forms["myForm"]["mname"].value;
    if (b == null || b == "") {
	alert("The Middle Name must be filled");
	return false;
	}
	
	var e = document.forms["myForm"]["lname"].value;
    if (e == null || e == "") {
	alert("The Last Name must be filled");
	return false;
	}
	
	var f = document.forms["myForm"]["address"].value;
    if (f == null || f == "") {
	alert("The Address must be filled");
	return false;
	}
    
     var a = document.forms["myForm"]["city"].value;
    if (a == null || a == "") {
	alert("The City must be filled");
	return false;
	}
	
	 var c = document.forms["myForm"]["pincode"].value;
    if (c == null || c == "") {
	alert("The Pincode must be filled");
	return false;
	}
	
	var d = document.forms["myForm"]["con"].value;
    if (d == null || d == "") {
	alert("The Contact must be filled");
	return false;
	}
	
    var h = document.forms["myForm"]["native"].value;
    if (h == null || h == "") {
	alert("The Native Place must be filled");
	return false;
	}
	
	 var i = document.forms["myForm"]["prof"].value;
    if (i == null || i == "") {
	alert("The Profession must be filled");
	return false;
	}
	
    var g = document.forms["myForm"]["dob"].value;
    if (g == null || g == "") {
	alert("The Date Of Birth must be filled");
	return false;
	}
    
    var k = document.forms["myForm"]["adob"].value;
    if (k == null || k == "") {
	alert("The Date Of Birth must be filled");
	return false;
	}
    
    var l = document.forms["myForm"]["ldob"].value;
    if (l == null || l == "") {
	alert("The Date Of Birth must be filled");
	return false;
	}
	var j = document.forms["myForm"]["email"].value;
    if (j == null || j == "") {
	alert("The Email ID must be filled");
	return false;
	}
	
	
}