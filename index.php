<!DOCTYPE html><!-- Declaration of type html for the browser-->
<html lang="en"><!-- begining of html-->

<head>
	<!-- meta stuff-->
	<meta charset= "utf-8"/>
	<meta name="Description" content=" "/>
	<meta name="Keywords" content=" "/>
	<meta name="author" content="Manan Rajpal"/>
	<title>M&amp;H Company driven by technology.</title>
	<!--linking of css-->
	<link href="styles/style.css" rel="stylesheet"/>
</head>


<body>
<!-- begining of header containing menu-->
<?php include("php/navigator.php")?>

<!-- begining of section that contains quote and company's image.-->
<section id="quote">
	<img src="images/M&H.png" alt="M&amp;H" id="quoteimage" />
	<h1 class="quoteheading">Let's go invent tomorrow instead of worrying about what happened yesterday-Steve Jobs.</h1>
</section>
<!-- begining of content of the body which contain's company details.-->
<section id="welcome">
	<h2>Welcome to M&H.</h2>	
	<p class="content">M&H is a compnay that's driven by the technology is a leading company in IT Industry.We specialize in creating and designing softwares.We have the knowledge, resources to develope software applications that suits client requirements, expenses.<br/> Designing for a variety of customer across the globe has given us the opportunity to improve across various domains and platforms. We provide our services for business solutions as well as systems. We have our offices in most most cities of Australia.We have more then 500 staff working together to provide you the best care and service.</p>
	<p id="softwared"><img src="images/background1.jpg" alt="Software-Developement" height="400" width="1000"/></p>
	<p class="content">Our expertise in fields include:</p>
	<ul class="content">
		<li>Software Development.</li>
		<li>Client-Server.</li>
		<li>Web Applications.</li>
		<li>Mobile Application.</li>
		<li>Database Management.</li>
		<li>Artificial Intelligence.</li>
	</ul>
</section>
<p id="office">Select a State to view our office location's</p>
<img src="images/map.jpg" alt="Map" usemap="#officelocations"/>
<map name="officelocations">
	<area shape="rect" coords="320,106,361,181" alt="Northern Territory" href="images/northern.jpg">
	<area shape="rect" coords="564,3,633,79" alt="Queensland" href="images/queensland.jpg">
	<area shape="rect" coords="774,167,811,216" alt="New South WALES" href="images/newsouthwales.jpg">
	<area shape="rect" coords="823,411,859,426" alt="Victoria" href="images/victoria.jpg">
	<area shape="rect" coords="706,582,719,597" alt="Tasmania" href="images/tasmania.jpg">
	<area shape="rect" coords="413,493,466,549" alt="South Australia" href="images/southaustralia.jpg">
	<area shape="rect" coords="185,305,295,397" alt="Western Australia" href="images/westernaustralia.jpg">
</map>
</body>

<!--end of html-->
</html>