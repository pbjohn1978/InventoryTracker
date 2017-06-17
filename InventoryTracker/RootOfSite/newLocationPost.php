<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$servername = "";
		$username = "";
		$password = "";
		$dbname = "InventoryTrackerCptc";
		$newLocation = $_POST["locationName"];
		$sql = "INSERT INTO `ItemLocation`(`ItemLocationName`) VALUES ('".$newLocation."')";
		$outputString = "0 Locations Added.";
		
		//Create the Connection
		$con = mysqli_connect($servername, $username, $password, $dbname);
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		//Run the Query...
		$result = mysqli_query($con, $sql);
		
		//Process the results to a string for output
		if ( $result ) {
			$outputString = "1 New Location Added '".$newLocation."'";
		}
		
		echo $outputString."<br>";
		
		//close the connection to server
		$con->close();
	?>
</body>
</html>