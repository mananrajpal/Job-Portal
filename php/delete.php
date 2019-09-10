<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content="Delete all records"/>
	<meta name="Keyword" content="Delete records"/>
	<title>Delete Page</title>
</head>
<body>
	<?php
		require_once("login.php");
		$conn= mysqli_connect($host, $user, $pwd, $sql_db);
		if(!$conn){
			echo "<p>Connection failed.</p>";
		}
		else{
			$jrn=trim($_POST["jobreference"]);
			$sql_table="eoi";
			$query = "Delete from eoi where jrn='$jrn' ";
			$result= @mysqli_query($conn, $query);
			if(!$result){
				echo "<p>There is something wrong with the",$query,"<./p>";
			}
			else{
				echo "<p>EOI's have been deleted.</p>";
			}
		
		
		}
	?>
</body>
</html>