<!DOCTYPE html><!-- declaration of type html for the browser-->
<html lang="en"><!-- begining of html-->

<head>
	<!-- meta stuff-->
	<meta charset="utf-8"/>
	<meta name="Description" content="Page that contains the positions available in the company. "/>
	<meta name="Keywords" content=" Jobs available. "/>
	<meta name="author" content="Manan Rajpal"/>
	<title>M&amp;H: Company driven by technology.</title>
	<!-- linking of css-->
	<link href="styles/style.css" rel="stylesheet"/>
	<script src="scripts/jobs.js"></script>
	
</head>

<body>
<!-- begining of header containing menu.-->
<?php include("php/navigator.php")?>

<!-- begining of section containing quote and company's image.-->

<section id="quote">
	<img src="images/M&H.png" alt="M&amp;H" id="quoteimage" />
	<h1 class="quoteheading">Let's go invent tomorrow instead of worrying about what happened yesterday-Steve Jobs.</h1>
</section>

<!-- begining of section acting as banner which contains direct links to two job openings.-->
<section id="banner">
<aside id="jobav">
	<h2>Two Job Openings this month:</h2>
	<ol>
		<li><a href="jobs.html#customer">Customer Support Specialist</a></li>
		<li><a href="jobs.html#Webd">Web Developer</a></li>
	</ol>
</aside>
</section>

<!-- begining of section containing all the details of jobs available.-->
<section id="jobsection">
<h2 id="problem">Jobs Available:</h2>
<ol>
	<li id="customer">Customer Support Specialist
						<ol>
							
							<li>Company's Position Reference number:<span id="jrn"> 254225</span></li>
							<li>Position Title: Customer Support Specialist</li>
							<li>Description of position: Customer support specialist provides the basic information about the company and it's products to the customers. Any customer who has some problems or questions regarding anything related to the Company turns to the Customer Support Specialist. Customer contact them on company's hotline number and Customer Support Specialist troubleshoot their problems.</li>
							<li>Salary Range: $40,000 - $50,000.</li>
							<li>Title of Postition: Customer Support</li>
							<li>Key Responsibilities:
													<ul>
														<li>Attend all the calls, emails, letters from the customers.</li>
														<li>To make sure all the information is properly conveyed to customer.</li>
														<li>Multi-tasking with varois systems and databases to provide fast service to customers.</li>
														<li>Share knowledge and information with the co-workers for the betterment of the company.</li>
													</ul>
							</li>
							<li> Requirements:
												<ul>
													<li>Essential:
																<ul>
																	<li>Bachelor's Degree in Computer Science or equivalent</li>
																	<li>Experience: 2 years.</li>
																	<li>Proficient is English.</li>
																	<li>Good listening skills.</li>
																	
																	
																	
																</ul>
													</li>
													<li>Preferable:
																<ul>
																	<li>Be initiative.</li>
																	<li>Should have adaptibility.</li>
																	<li>Good problem analysing and solving skills.</li>
																</ul>
													</li>			
													
											
												</ul>
							</li>
							<li><a href="apply.php" id="254225" >Apply</a></li>
							
						</ol>
	</li>
	<li id="Webd">Web Developer
							<ol> 
								<li>Company's Position Reference Number:<span id="jrn1">252216</span></li>
								<li>Position Title: HTML Developer</li>
								<li>Description: You will be involved in designing of software, developing it and troubleshooting all the problems. You'll have to work with the team members.</li>
								<li>Salary Range:$50,000 - $60,000</li>
								<li>Title of the position: Web Developer</li>
								<li>Key responsibilites: 
													<ul>
														<li>Designing, modifying websites.</li>
														<li>Create websites that are user-frienly.</li>
													</ul>
								<li>Requirement:
											<ul>
												<li>Essentials:
															<ul>
																<li>Bachelors in Computer Science or equivalent</li>
																<li>Knowledge of designing.</li>
																<li>2 years experience in application development.</li>
																<li>Understanding of Java IDE</li>
																<li>2 years of experience in HTML</li>
															</ul>
												
												</li>
												<li>Preferred:
															<ul>
																<li>Basic understanding of C++.</li>
																<li>Self motivated.</li>
																<li>Ability to woke with team.</li>
															</ul>
												</li>
											</ul>
								</li>
								<li><a href="apply.php" id="252216">Apply</a></li>
							</ol>
	</li>
</ol>
</section>

<!-- Apply button which links directly to the apply page-->
<section id="linkapply">
	<form action="apply.php">
		<input type="Submit" value="Click here to Apply"/>
	
	</form>	
</section>

<!-- sites referred to-
	http://hiring.monster.com/hr/hr-best-practices/recruiting-hiring-advice/job-descriptions/web-developer-job-description-sample.aspx
	http://study.com/articles/Customer_Support_Specialist_Job_Duties_and_Info_About_a_Career_in_Customer_Support.html
	http://www.motivaction.com/wp-content/uploads/2014/06/JOB-DESCRIPTION-Customer-Support-Customer-Service-Specialist-2.pdf
	http://jobs.leidos.com/ShowJob/Id/800109/Web%20Developer 
-->



</body>
</html>