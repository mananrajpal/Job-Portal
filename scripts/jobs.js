/**
* Author: Manan Rajpal
* Target: jobs.html
* Purpose: Transferring data from jobs page to apply page
* Created: 02 May 2016
* Last updated: 02 May 2016
*/

"use strict";
function firstjob(){
	var tmpjrn = document.getElementById("jrn").textContent;
	localStorage.jrn = tmpjrn;
	
}
function secondjob(){ //function being called when user clicks apply
	var tmpjrn = document.getElementById("jrn1").textContent; 
	localStorage.jrn = tmpjrn; //storing the job reference number for the apply page
	
}




function init(){
	//storeReferrence();
	var firstjobElem = document.getElementById("254225"); 
	firstjobElem.onclick = firstjob; //having on click on the anchor element of apply
	var secondjobElem = document.getElementById("252216");
	secondjobElem.onclick = secondjob;
}

window.onload= init;