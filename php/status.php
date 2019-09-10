<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content="Status Page"/>
	<meta name="Keyword" content="Status"/>
	<title>Confirmation Page</title>
</head>
<body>
	<?php
		require_once("login.php");
		$conn= mysqli_connect($host, $user, $pwd, $sql_db);
		if(!$conn){
			echo "<p>Connection failed.</p>";
		}
		else{
			$jobref=trim($_POST["jobref"]);
			$eoi=trim($_POST["EOI"]);
			$status= trim($_POST["status"]);
			$sql_table="eoi";
			if(!$jobref==""){
				$query = "Update eoi set status='$status' where jrn='$jobref' ";
			}
			else if(!$eoi==""){
				$query = "Update eoi set status='$status' where eoinumber='$eoi' ";
			}
			
			$result= mysqli_query($conn, $query);
			if(!$result){
				echo "<p>There is something wrong with the",$query,"<./p>";
			}
			else{
				echo "<p>Status have been changed.</p>";
			}
		
		
		}
	?>
</body>
</html>