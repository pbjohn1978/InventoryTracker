<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<?php
		$servername = "";
		$username = "";
		$password = "";
		$dbname = "InventoryTrackerCptc";
		$newStore = $_POST["storeName"];
		$sql = "INSERT INTO `Store`(`StoreName`) VALUES ('".$newStore."')";
		$outputString = "0 Locations Added.";
		
		//Create the Connection
		$con = mysqli_connect($servername, $username, $password, $dbname);
		if (!$con) {
			die("Connection failed: ".mysqli_connect_error());
		}
		
		//Run the Query...
		$result = mysqli_query($con, $sql);
		
		//Process the results to a string for output
		if ( $result ) {
			$outputString = "1 New Store Added '".$newStore."'";
		}
		
		echo $outputString."<br>";
		
		//close the connection to server
		$con->close();
	?>
</body>
</html>