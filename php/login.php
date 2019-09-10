<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="Description" content="Login Detials"/>
	<meta name="Keyword" content="Login"/>
	<title>Delete Page</title>
</head>
<body>
<?php
	$host = "mysql.ict.swin.edu.au";
	$user = "s100864824";
	$pwd = "Manansingh1816";
	$sql_db = "s100864824_db";

/*---------------------------------Connection-----------------------------*/
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if ($conn){
		echo "";
	}
	else{
		echo "Connection failed.";
	}
?>
</body>
</html>