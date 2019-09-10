<!DOCTYPE html> <!-- Declaration of type for the browser-->
<html lang="en"> <!-- begining of html-->

<head>
	<!-- meta stuff-->
	<meta charset="utf-8"/>
	<meta name="Description" content=" "/>
	<meta name="Keywords" content=" "/>
	<meta name="author" content="Manan Rajpal"/>
	<!-- Title-->
	<title>M&amp;H: Company driven by technology.</title>
	<!-- linking of css.-->
	<link href="styles/style.css" rel="stylesheet"/>
	<script src="scripts/apply.js"></script>
</head>


<body>
<!-- begining of Header which includes the menu.-->
<?php include("php/navigator.php")?>


<!-- begining of section that contain's company's image and quote.-->
<section id="quote">
	<img src="images/M&H.png" alt="M&amp;H" id="quoteimage" />
	<h1 class="quoteheading">Let's go invent tomorrow instead of worrying about what happened yesterday-Steve Jobs.</h1>
</section>

<!-- begining of form that takes all the information about the candidate in the from f radio button's, text etc-->
<form id="applyform" method="post" novalidate="novalidate" action="php/add.php">
	
	<h1 id="problem1">It's never too late to start a job.</h1>
	<section id="jobdetails">
		<fieldset>		
			<legend>Job Details:</legend>
			<p><label  id="confirmjrn">Job Reference Number</label>
			
			<input type="hidden" name="jrn" id="jrn" />
		</fieldset>
	</section>

	<section id="personald">
		<fieldset>
				<legend>Personal Details:</legend>
				<p><label for="First_Name">First Name:</label>
				<input type="text" id="First_Name" name="First_Name" required="required" pattern="[A-Za-z]{0,25}"/></p>
				<p><label for="Last_Name">Last Name:</label>
				<input type="text" id="Last_Name" name="Last_Name" required="required" pattern="[A-Za-z]{0,25}"/></p>
				<p><label for="DOB">Date of Birth</label>
				<input type="text" name="DOB" id="DOB" required="required" placeholder="dd/mm/yyyy" /></p>
				<p><span id="doberror"></span></p>
			<fieldset>
			
				<legend>Gender: </legend>
				<p><label for="Male">Male</label>
				<input type="radio" name="Gender" id="Male" value="Male" required="required"/>
				<label for="Female">Female</label>
				<input type="radio" name="Gender" id="Female" value="Female" required="required"/></p>
			</fieldset>
		</fieldset>
	</section>
	
	<section id="address">
		<fieldset>
			<legend>Address:</legend>
			<p><label for="Street_Address">Street Address:</label>
			<input type="text" name="Street_Address" id="Street_Address" required="required" maxlength="48"/></p>
			<p><label for="Suburb">Suburb/Town:</label>
			<input type="text" name="Suburb" id="Suburb" required="required" maxlength="48"/></p>
			<label for="State">State:</label>
			<select name="State" id="State">
				<option value="" selected="selected">Please Select</option>
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option>
			</select>
			<p><Label for="postcode">Postcode</label>
			<input type="text" name="postcode" required="required" id="postcode" pattern="[0-9]{4}"/></p>
			<p><span id="error"></span></p>
		</fieldset>
	</section>
	
	<section id="contact">
		<fieldset>
			<legend>Contact Details:</legend>
			<p><label for="email">Email:</label>
			<input type="text" name="email" required="required" id="email" placeholder="abcd@gmail.com" pattern="^.+@.+\..{2,3}$"/></p>
			<p><label for="phone">Phone Number:</label>
			<input type="text" name="phone" id="phone" required="required" pattern="[0-9]{8,12}"/></p>
		</fieldset>
	</section>


	<section id="skills">
		<fieldset>
			<legend>Skills</legend>
			<p>Skills List:</p>
			<p><label for="HTML">HTML</label>
			<input id="HTML" type="checkbox"  name="HTML" value="HTML" checked="checked"/>
			<label for="JAVA">JAVA</label>
			<input id="JAVA" type="checkbox"  name="JAVA" value="JAVA"/>
			<label for="C++">C++</label>
			<input  id="C++" type="checkbox"  name="C++" value="C++"/>
			<label><input type="checkbox"  name="Others" value="Others"/>Other Skills</label></p>
			<p><textarea id="textarea" name="textarea" rows="4" cols="20" placeholder="Please write your other skills."></textarea></p>
		</fieldset>
	</section>

	<!-- Submit button that submits all the information that candidate has given to the server-->
	<input type="submit" value="Apply" id="submit"/>
	<!-- Reset button that reset's all the information on the form-->
	<input type="reset" value="Reset Form" id="reset"/>
</form>
</body>
<!-- end of html-->
</html>