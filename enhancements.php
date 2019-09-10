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

<h2 id="enhancementsheading">Enhancements made in this website:</h2>
<section id="imagemapcontent">
<ol>
	<li>Image Mapping:
				<ol>
					<li>Image Mapping is an image which has clickable areas in it. When a specified area is clicked on the image it opens the element linked to it. It uses the basic concept of links between elements by the use of anchor and id but with something more representative such as image.</li>
					<li>We need a map tag and an image for the image map. The map tag includes the hotspot which is defined area in which we click. In order to specify that hotspot map tag gives us areas such as Rectangle, Circle and Pentagon. We define the hotspot using this shapes by co-ordinates.</li>
					<li><a href="index.html#office">Link to the extension</a></li>
				</ol>
	</li>
</ol>
</section>
</body>

</html>