<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
</head>
<body>
	<?php
		$servername = "http://96.81.150.5/";
		$username = "beekerINVTRACKER";
		$password = "NpgqdulHOhLARGmx";
		$dbname = "InventoryTrackerCptc";

		//Create the Connection
		$con = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT 
					id,
					firstname,
					lastname 
				FROM MyGuests";
		$result = $conn->query($sql);
		
	?>
</body>
</html>
