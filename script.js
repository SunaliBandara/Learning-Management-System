
function validateModuleForm(){
	
	if(createModules.mcode.value.length==0 || createModules.mname.value.length==0 || createModules.dprogramme.value.length==0 || createModules.faculty.value.length==0 || createModules.year.value.length==0 || createModules.uploadImg.value.length==0){
		
		
		alert("Please include Module Code/Module Name/Degree Programme and Year");
		return false;
		
	}
	
	
	
}


function validateRegisterForm(){
	
		
	if(createUsers.nic.value.length==0 || createUsers.email.value.length==0 || createUsers.fName.value.length==0 || createUsers.lName.value.length==0 || createUsers.contact.value.length==0 || createUsers.pwd.value.length==0){
			
		alert("Please Fill all Fields");
		return false;
		
	}
	
	
	if(!createUsers.term.checked){
		
		alert("You must agree with our terms and conditions.");
		return false;
	}	}



function validateLoginForm(){
	if(logForm.email.value.length==0 || logForm.pwd.value.length==0){
		alert("Please Fill all Fields");
		return false;
	}
	
	
}




function validateHallForm(){
	
	if(createHall.batch.value.length==0 || createHall.mName.value.length==0 || createHall.hallNumber.value.length==0 || createHall.time.value.length==0 ){
		
		alert("Please Fill all Fields");
		return false;
	}

}

function validateLabForm(){
	
	if(createLab.batch.value.length==0 || createLab.groupNumber.value.length==0 || createLab.mName.value.length==0 || createLab.labNumber.value.length==0 || createLab.time.value.length==0){
		
		alert("Please Fill all Fields");
		return false;
	}
}






function validateEventForm(){
	if(createEvent.eName.value.length==0 || createEvent.venue.value.length==0){
		
		alert("Please Include Evant name and Venue");
		
		return false;
	}
	
	if(createEvent.time.value.length==0){
		
		alert("Include time frame");
		
		return false;
	}
	
	
}














