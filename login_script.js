function validation(){
	var valid = true;
	
	formLabels = document.getElementsByTagName("label");
	
	var email = document.regForm.email.value;
	var at = email.indexOf("@");
	if(email == ""){
		formLabels[0].innerHTML="Email: [Required]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else if(at == -1){
		formLabels[0].innerHTML="Email: [Incorrect]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else {
		formLabels[0].innerHTML="Email:";
		formLabels[0].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var password = document.regForm.password.value;
	if(password == ""){
		formLabels[1].innerHTML="Password: [Required]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else if(password.length < 8){
		formLabels[1].innerHTML="Password: [Must be > 8]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else {
		formLabels[1].innerHTML="Password:";
		formLabels[1].style="color: black";
		valid = (valid) ? true : false;
	}
	
	return valid;
}

function clear2(){
	var myArray = new Array();
	myArray[0] = "email: *";
	myArray[1] = "password: *";
	for(var i=0 ; i < myArray.length ; i++){
		formLabels[i].innerHTML = myArray[i];
		formLabels[i].style = "color: black";
	}
}