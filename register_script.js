function validation(){
	var valid = true;
	
	formLabels = document.getElementsByTagName("label");
	
	var firstName = document.regForm.firstName.value;
	if(firstName==""){
		formLabels[0].innerHTML="First Name: [Required]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else if( !isNaN(firstName)){
		formLabels[0].innerHTML="First Name: [Text Only]";
		formLabels[0].style="color: red";
		valid = false;
	}
	else {
		formLabels[0].innerHTML="First Name:";
		formLabels[0].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var lastName = document.regForm.lastName.value;
	if(lastName==""){
		formLabels[1].innerHTML="Last Name: [Required]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else if( !isNaN(lastName)){
		formLabels[1].innerHTML="Last Name: [Text Only]";
		formLabels[1].style="color: red";
		valid = false;
	}
	else {
		formLabels[1].innerHTML="Last Name:";
		formLabels[1].style="color: black";
		valid = (valid) ? true : false;
	}
	var regNo = document.regForm.regNo.value;
	if(regNo == ""){
		formLabels[2].innerHTML="Registration number: [Required]";
		formLabels[2].style="color: red";
		valid = false;
	}
	else if( isNaN(regNo)){
		formLabels[2].innerHTML="Registration number: [Digits Only]";
		formLabels[2].style="color: red";
		valid = false;
	}
	else {
		formLabels[2].innerHTML="Registration number:";
		formLabels[2].style="color: black";
		valid = (valid) ? true : false;
	}
	
	
	var email = document.regForm.email.value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(email==""){
		formLabels[8].innerHTML="Email: [Required]";
		formLabels[8].style="color: red";
		valid = false;
	}
	else if(!re.test(email)){
		formLabels[8].innerHTML="Email: [Incorrect Email]";
		formLabels[8].style="color: red";
		valid = false;
	}
	else {
		formLabels[8].innerHTML="Email:";
		formLabels[8].style="color: black";
		valid = (valid) ? true : false;
	}
	
	var mobile = document.regForm.mobile.value;
	if(mobile == ""){
		formLabels[9].innerHTML="Mobile: [Required]";
		formLabels[9].style="color: red";
		valid = false;
	}
	else if(mobile.length < 11){
		formLabels[9].innerHTML="Mobile: [Must be 11 digits]";
		formLabels[9].style="color: red";
		valid = false;
	}
	else if( isNaN(mobile)){
		formLabels[9].innerHTML="Mobile: [Digits Only]";
		formLabels[9].style="color: red";
		valid = false;
	}
	else {
		formLabels[9].innerHTML="Mobile:";
		formLabels[9].style="color: black";
		valid = (valid) ? true : false;
	}
	return valid;
}

function clear2(){
	var myArray = new Array();
	myArray[0] = "First Name: *";
	myArray[1] = "Last Name: *";
	myArray[2] = "Registration number: *";
	myArray[8] = "Email: *";
	myArray[9] = "Mobile:";
	for(var i=0 ; i < myArray.length ; i++){
		if(i >= 3 && i <=7){
			continue;
		}
		formLabels[i].innerHTML = myArray[i];
		formLabels[i].style = "color: black";

	}
}