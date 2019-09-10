/**
* Author: Manan Rajpal
* Target: apply.html
* Purpose: Validating the content on apply page.
* Created: 02 May 2016
* Last updated: 02 May 2016
*/
"use strict";
function validate(){
	var firstname= document.getElementById("fname").value;
	var lastname= document.getElementById("lname").value;
	var tempdob = document.getElementById("dob").value;
	var tempadd = document.getElementById("streetad").value;
	var temptown = document.getElementById("subt").value;
	var tempemail = document.getElementById("email").value;
	var tempphone = document.getElementById("phone").value;
	var postcode = document.getElementById("postcode").value; 	
	var result= true;
	var errMsg = ""; 
	
	 //check postcode
		var source = String(postcode.charAt(0));  
		var state= document.getElementById("state").value;

		if(state=="VIC" && (source != "3" && source != "8")){  //checking condition
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg; //showing error on html web page
		}
		if(state=="NSW" && (source!= 1 && source != 2)){
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg;
		}
		if(state=="QLD" && (source != 4 && source != 9)){
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg;
		}
		if(state=="NT" && (source!= 0)){
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg;
		}
		if(state=="WA" && ( source != 6 )){
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg;
		}
		if(state=="SA" && (source != 5)){
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg;
		}
		if(state=="TAS" && ( source != 7)){
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg;
		}
		if(state=="ACT" && (source != 0)){
			result = false;
			errMsg = errMsg + "Please enter a valid combination.";
			document.getElementById("error").textContent= errMsg;
		}
		
		//checking textbox
		var textb = document.getElementById("others"); //assigning textbox id
		var check = document.getElementById("other"); //assigning checkbox id
		if(check.checked == true && textb.value == ""){ //checking condition
			alert(errMsg);
			errMsg = errMsg + "Please enter your additional skills.";
			result= false;
		
		}
		//checking date
				var now = new Date();   	//getting the date
				var dob = document.getElementById("dob").value; //getting the date entered by the user
				var dmy = dob.split("/");    //splitting the date into dd/mm/yyyy
				for (var i = 0; i < dmy.length; i++){ //checking if all are numbers
					if(isNaN(dmy[i])){
						errMsg = errMsg + "You must enter only numbers into the date" + "\n";
						result = false;
					}
				}
   
				if ((dmy[0] <1) || (dmy[0] > 31)){   //day
					errMsg = errMsg + "Day must be between 1 and 31" + "\n";
					result = false;
				}
				if ((dmy[1] <1) || (dmy[1] > 12)){   //month
					errMsg = errMsg + "Month must be between 1 and 12" + "\n";
					result = false;
				}
				if (!(dmy[2] < now.getFullYear() - 15) && (dmy[2] > now.getFullYear() - 80)) {    //dmy[2] = year
					
					result = false;
					
				}
				if (dmy[2] > now.getFullYear()){    
					errMsg = errMsg + "You aren't born yet" + "\n";
					result = false;
				}
	 
	
	 if(errMsg!=""){ //displaying error message
		 alert(errMsg);
	 }
	 
	storeData(firstname,lastname,tempdob,tempadd,temptown,postcode,tempemail,tempphone); //calling function to store data
	 return result;		
	}	

function storeData(firstname,lastname,tempdob,tempadd,temptown,postcode,tempemail,tempphone){ //storing data using session storage
	sessionStorage.firstname = firstname;
	sessionStorage.lastname = lastname;
	sessionStorage.dob = tempdob;
	sessionStorage.streetad = tempadd;
	sessionStorage.subt= temptown;
	sessionStorage.postcode= postcode;
	sessionStorage.email = tempemail;
	sessionStorage.phone= tempphone;
}
	
function prefill_form(){

		
		document.getElementById("fname").value = sessionStorage.firstname;
		document.getElementById("lname").value = sessionStorage.lastname; //filling the data back
		document.getElementById("dob").value = sessionStorage.dob;
		document.getElementById("streetad").value = sessionStorage.streetad;
		document.getElementById("subt").value = sessionStorage.subt;
		document.getElementById("postcode").value = sessionStorage.postcode;
		document.getElementById("email").value = sessionStorage.email;
		document.getElementById("phone").value = sessionStorage.phone;
	
	
	
}
function getReferrence(){ // getting the job reference number from the jobs page.
	if(localStorage.jrn!=undefined){
		document.getElementById("confirmjrn").textContent = localStorage.jrn;
		 
		document.getElementById("jrn").value = localStorage.jrn;
		
	}
}

function init(){
	
	getReferrence();
	var applyform= document.getElementById("applyform");
	applyform.onsubmit = validate;
	prefill_form();
}

window.onload= init;