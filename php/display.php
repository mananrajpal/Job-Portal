<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content="Display all records"/>
	<meta name="Keyword" content="Display records"/>
	<title>Delete Page</title>
</head>
<body>
<?php
	require_once("login.php");
	$conn=@mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		echo "<p>Connection failed.</p>";
	}
	else{
		$sql_table="eoi";
		$query="Select * from $sql_table";
		$result = @mysqli_query($conn,$query);
		if(!$result){
			echo "<p>There is something wrong with",$query,"</p>";
		}
		else{
			
			echo "<table border=\"1\">";
			echo"<tr>"
					."<th scope=\"col\">EOI</th>"
					."<th scope=\"col\">Job Reference Number</th>"
					."<th scope=\"col\">First Name</th>"
					."<th scope=\"col\">Last Name</th>"
					."<th scope=\"col\">Street Address</th>"
					."<th scope=\"col\">Suburb</th>"
					."<th scope=\"col\">State</th>"
					."<th scope=\"col\">Postcode</th>"
					."<th scope=\"col\">Email</th>"
					."<th scope=\"col\">Phone</th>"
					."<th scope=\"col\">Skills</th>"
					."<th scope=\"col\">Other</th>"
					."<th scope=\"col\">Status</th>"
					."</tr>";
			while ($row=@mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>",$row["eoinumber"],"</td>";
				echo "<td>",$row["jrn"],"</td>";
				echo "<td>",$row["fname"],"</td>";
				echo "<td>",$row["lname"],"</td>";
				echo "<td>",$row["streetad"],"</td>";
				echo "<td>",$row["suburb"],"</td>";
				echo "<td>",$row["state"],"</td>";
				echo "<td>",$row["postcode"],"</td>";
				echo "<td>",$row["email"],"</td>";
				echo "<td>",$row["phone"],"</td>";
				echo "<td>",$row["skills"],"</td>";
				echo "<td>",$row["other"],"</td>";
				echo "<td>",$row["status"],"</td>";
				echo "</tr>";
			}
			mysqli_free_result($result);
		}
		mysqli_close($conn);
	}
?>
</body>
</html>