<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content="Create table programmetically."/>
	<meta name="Keyword" content="Create table"/>
	<title>Table creation confirmed</title>
</head>
<body>
<?php

	require_once("login.php");
		$conn= mysqli_connect($host, $user, $pwd, $sql_db);
		if(!$conn){
			echo "<p>Connection failed.</p>";
		}
		else{
				$query="Select * from eoi";
				$result=mysqli_query($conn,$query);
				if(empty($result)){
					$query="Create table eoi(
							eoinumber int(11) not null auto_increment primary key,
							jrn varchar(20),
							fname varchar(20),
							lname varchar(20),
							streetad varchar(40),
							suburb varchar(20),
							state varchar(20),
							postcode int(10),
							email varchar(30),
							phone varchar(20),
							skills varchar(1200),
							other varchar(2000),
							status varchar(10) default 'New' )";
				}
				$result=mysqli_query($conn,$query);
			
				if($result){
					echo "Table Created";
				}
				else {
				echo"<p>There is something wrong with",$query,"</p>";}
			}
?>
</body>
</html>