<!DOCTYPE html><!-- Declaration of type to the the browser.-->
<html lang="en"> <!-- begining of html-->

<head>
	<!--meta stuff-->
	<meta charset= "utf-8"/>
	<meta name="Description" content="Manage Page "/>
	<meta name="Keywords" content="Manage"/>
	<meta name="author" content="Manan Rajpal"/>
	<title>M&amp;H Company driven by technology.</title>
	<!-- linking of about.css -->
	<link href="styles/style.css" rel="stylesheet"/>
</head>
<body>
<!-- begining of header which includes the menu-->
<?php include("php/navigator.php")?>


<!-- Quote section which includes the companies logo and a quote by Steve Jobs.-->
<section id="quote">
	<img src="images/M&H.png" alt="M&amp;H" id="quoteimage" />
	<h1 class="quoteheading">Let's go invent tomorrow instead of worrying about what happened yesterday-Steve Jobs.</h1>
</section>


<!--Form to change the status of the candidate or every candidate of that particular job reference number-->
<section id="status">
<form method="post" action="php/status.php">
	<fieldset>
		<legend>Change the status of a candidate</legend>
		<p><label for="EOI"> EOI:</label>
		<input type="text"  id="EOI" name="EOI"/></p>
		<p><label for="jobref"> Job Reference Number:</label>
		<input type="text"  id="jobref" name="jobref"/></p>
		<p><label for="status"> New Status:</label>
		<input type="text"  id="status" name="status"/></p>
		<input type="submit" value="Change Status" id="submit"/>
	</fieldset>
</form>
</section>



<!--Deleting all records of that particular job reference number-->
<section id="delete">
<form method="post" action="php/delete.php">
	<fieldset>
		<legend>Delete all EOI's of particular job reference number</legend>
		<p><label for="jobreference"> Job Reference Number:</label>
		<input type="text"  id="jobreference" name="jobreference"/></p>
		<input type="submit" value="Delete EOI's" id="submit"/>
	</fieldset>
</form>
</section>



<section id="display">
<form method="post" action="php/display.php">
	<fieldset>
		<legend>Display All EOI's</legend>
		<input type="submit" value="Display EOI's" id="submit"/>
	</fieldset>
</form>
</section>

<section id="search">
<form method="post" action="php/search.php">
	<fieldset>
		<legend>Search for EOI's</legend>
		<p><label for="jobreference"> Job Reference Number:</label>
		<input type="text"  id="jobreference" name="jobreference"/></p>
		<p><Label for="fname">First Name:</Label>
		<input type="text"  id="fname" name="fname"/></p>
		<p><Label for="lname">Last Name:</Label>
		<input type="text"  id="lname" name="lname"/></p>
		<input type="submit" value="Search EOI's" id="submit"/>
	</fieldset>
</form>
<!--Creating the table in mysql programmatically if the table does not exist.-->

<form method="post" action="php/createtable.php">
<fieldset>
	<legend>Click to create table if it doesn't exsist</legend>
	<label><input type="submit" name="submit">
</fieldset>
</form>
</section>
</body>
</html>