<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content="Adding information to the table in database"/>
	<meta name="Keyword" content="Adding information"/>
	<title>Confirmation Page</title>
</head>
<body>
	<?php
		$errMsg="";
		require_once("login.php");
		$conn= mysqli_connect($host, $user, $pwd, $sql_db);
		/*--------------------------------------------------------------Checking integrity of data using isset property-----------------------------------------------*/
			$currDate=date("Y");
			$jrn=trim($_POST["jrn"]);
			if(isset($_POST["First_Name"])){
				$fname = trim($_POST["First_Name"]);
			}
			if(isset($_POST["Last_Name"])){
				$lname= trim($_POST["Last_Name"]);
			}
			if(isset($_POST["DOB"])){
				$dob= trim($_POST["DOB"]);
			}
			if(isset($_POST["Street_Address"])){
				$street = trim($_POST["Street_Address"]);
			}
			if(isset($_POST["Suburb"])){
				$suburb = trim($_POST["Suburb"]);
			}
			if(isset($_POST["postcode"])){
				$postcode = trim($_POST["postcode"]);
			}
			if(isset($_POST["email"])){
				$email = trim($_POST["email"]);
			}
			if(isset($_POST["phone"])){
				$phone = trim($_POST["phone"]);
			}
			if(isset($_POST["State"])){
				$state=$_POST["State"];
			}
			
			
/*---------------------------------------------------------------------Checking empty fields----------------------------------------------------------------*/			
			if($fname==""){
				$errMsg = $errMsg. "<p>Please enter First Name.</p>";
			}
			if($lname==""){
				$errMsg = $errMsg. "<p>Please enter Last Name.</p>";
			}
			if($dob==""){
				$errMsg = $errMsg. "<p>Please enter Date of Birth.</p>";
			}
			if($street==""){
				$errMsg = $errMsg. "<p>Please enter Street Address.</p>";
			}
			if($suburb==""){
				$errMsg = $errMsg. "<p>Please enter Suburb/Town.</p>";
			}
			if($postcode==""){
				$errMsg = $errMsg. "<p>Please enter Postcode.</p>";
			}
			if($email==""){
				$errMsg = $errMsg. "<p>Please enter Email.</p>";
			}
			if($phone==""){
				$errMsg = $errMsg. "<p>Please enter Phone Number.</p>";
			}
			if($state==""){
				$errMsg = $errMsg. "<p>Please enter State.</p>";
			}
				
/*----------------------------------------------------------------------Skills------------------------------------------------------------------------------*/
			$skills="";
			if(isset($_POST["HTML"])){
				$skills= $skills."HTML";
			}
			if(isset($_POST["JAVA"])){
				$skills=$skills."JAVA";
			}
			if(isset($_POST["C++"])){
				$skills=$skills."C++";
			}
			
/*----------------------------------------------------------------Pattern Checking-------------------------------------------------------------------------*/
			$firstdigit = substr($postcode,0,1);
			$datebirth= substr($dob,6,4);
			$age = $currDate - $datebirth;
			$strtadd= strlen($street);
			$sub = strlen($suburb);
			$phon = strlen($phone);
			$textArea=$_POST["textarea"];
			if(!preg_match("/^[a-zA-Z]*$/",$fname)){
				$errMsg = $errMsg. "Please enter a valid first name";
			}
			if(strlen($fname)>25){
				$errMsg = $errMsg."Maximum 25 characters are allowed in First Name.";
			}
			if (!preg_match("/^[a-zA-Z]*$/",$lname)){
				$errMsg = $errMsg. "Please enter a valid last name";
			}
			if(strlen($lname)>25){
				$errMsg = $errMsg."Maximum 25 characters are allowed in Last Name.";
			}
			if($state==""){
				$errMsg = $errMsg."Please select a state";
			}
			if(($age < 15) or ($age>80)){
				$errMsg = $errMsg."You age must be between 15 and 80.";
			}
			if(!isset($_POST["Gender"])){
				$errMsg = $errMsg."Please select a gender.<br/>";
			}
			if($strtadd > 40){
				$errMsg = $errMsg. "Maximum 40 characters are allowed in Street Address.<br/>";
			}
			if($sub > 40){
				$errMsg = $errMsg. "Maximum 40 characters are allowed in Suburb.<br/>";
			}
			if($phon < 8 or $phon > 12){
				$errMsg = $errMsg."Only 8 to 12 digits are allowed in phone field.<br/>";
			}
			if(isset($_POST["Others"]) and $textArea==""){
				$errMsg = $errMsg."Write something in text area if other skills selected.";
			}
			switch($state){
				case "VIC":
					if($firstdigit!=="3" and $firstdigit!=="8"){
						$errMsg=$errMsg."Postcode for victoria starts with 3 or 8.";
					}
				break;
				case "NSW":
					if($firstdigit!=="1" and $firstdigit!=="2"){
						$errMsg=$errMsg."Postcode for NSW starts with 1 or 2.";
					}
				break;
				case "QLD":
				if($firstdigit!=="4" and $firstdigit!=="9"){
						$errMsg=$errMsg."Postcode for QLD starts with 4 or 9.";
				}
				break;
				case "NT":
				if($firstdigit!=="0"){
						$errMsg=$errMsg."Postcode for NT starts with 0.";
					}
				break;
				case "WA":
				if($firstdigit!=="6"){
						$errMsg=$errMsg."Postcode for WA starts with 6.";
					}
				break;
				case "SA":
				if($firstdigit!=="5"){
						$errMsg=$errMsg."Postcode for SA starts with 5.";
					}
				break;
				case "TAS":
				if($firstdigit!=="7"){
						$errMsg=$errMsg."Postcode for TAS starts with 7.";
					}
				break;
				case "ACT":
				if($firstdigit!=="0"){
						$errMsg=$errMsg."Postcode for ACT starts with 0.";
					}
				break;
				default:$errMsg=$errMsg."Please enter valid postcode.";
			}
			

/*-------------------------------------------------------------------Show Error Messages---------------------------------------------------------------------------*/		
			if(!$errMsg==""){
				echo "<p>Please fix the following errors", "<br/>",$errMsg,"</p>";
			}
			else{
				echo "<p>Your information is being submitted.</p>";
			}
/*--------------------------------------------------------------------Adding Values--------------------------------------------------------------------------*/		
			$sql_table="eoi";
			$jrn=trim($_POST["jrn"]);
			$fname=trim($_POST["First_Name"]);
			$lname=trim($_POST["Last_Name"]);
			$streetad=trim($_POST["Street_Address"]);
			$suburb=trim($_POST["Suburb"]);
			$state=trim($_POST["State"]);
			$postcode=trim($_POST["postcode"]);
			$email=trim($_POST["email"]);
			$phone=trim($_POST["phone"]);
			$other=trim($_POST["textarea"]);
/*------------------------------------------------------Connecting with the mysql-------------------------------------------------------------------*/			
	if(!$errMsg==""){
		echo "<p>Fix the errors.</p>";
	}	
	else{	
			if(!$conn){
				echo "<p>Connection failed.</p>";
			}
			else{
				$query = "insert into eoi (jrn, fname, lname, streetad, suburb, state, postcode, email, phone, skills, other) values ('$jrn', '$fname', '$lname', '$streetad', '$suburb', '$state', '$postcode', '$email', '$phone', '$skills', '$other')";
				$result= @mysqli_query($conn, $query);
				if(!$result){
					echo "<p>There is something wrong with the",$query,"<./p>";
				}
				else{
					$query="Select eoinumber from eoi order by eoinumber desc limit 1";
					$result = @mysqli_query($conn,$query);
					while ($row=@mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td >Your EOI number is",$row["eoinumber"],"</td>";
					echo "</tr>";
					echo "<p>Your Application has been submitted.</p>";
					}
				}
			}
	}
		

	mysqli_close($conn);
	
	?>
	
</body>
</html>