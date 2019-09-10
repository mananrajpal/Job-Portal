<!DOCTYPE html><!-- Declaration of type to the the browser.-->
<html lang="en"> <!-- begining of html-->

<head>
	<!--meta stuff-->
	<meta charset= "utf-8"/>
	<meta name="Description" content="About me "/>
	<meta name="Keywords" content="About"/>
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
<!-- About me-->
<h2 id="problem">About me:</h2>
<p id="name">Name: Manan Rajpal</p>
<p id="img"><img src="images/me.jpg" alt="Manan Rajpal"/></p>
<p id="stno">Student Number: 100864824</p>
<p id="course">Course: Bachelor of Computer Science</p>
<p id="tutname">Tutor's Name: Tri</p>
<p id="datetime">Tutorial Day: Wednesday <br/> Tutorial Time: 8:30- 10:30</p>

<table id="table">
	<tr>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
	</tr>
	<tr>
		<td>10:30am - 12:30pm</td>
		<td>8:30am - 11:30pm</td>
		<td>8:30am- 10:30am</td>
		<td>8:30am- 10:30am</td>
		<td>8:30am- 10:30am</td>
	</tr>
	<tr>
		<td>5:30pm- 7:30pm</td>
		<td></td>
		<td>12:30pm - 2:30pm</td>
		<td>10:30am - 12:30pm</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>5:30pm - 7:30pm</td>
		<td></td>
	</tr>
</table>
<!-- Footer includes the link which when clicked will allow you to send me an email.-->
<?php include("php/footer.php");?>

</body>
<!-- ending of html-->
</html>