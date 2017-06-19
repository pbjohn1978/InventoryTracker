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
		$userInputUN = $_POST["Uname"];
		$userInputPW = $_POST["Pword"];
		$sql = "SELECT * FROM `Users` WHERE UserLoginName = '".$userInputUN."' && UserLoginPass = '".$userInputPW."'";
		
		//Create the Connection
		$con = mysqli_connect($servername, $username, $password, $dbname);
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		//Run the Query...
		$result = mysqli_query($con, $sql);
		
		//Process the results to a string for output
		if ( mysqli_num_rows($result) == 1) {
			//create session here...
			
			//redirect to inventory page here...
			
			
			//close the connection to server
			$con->close();
		}
		else{
			$sideBarLoggedInString = '<h1>Inventory Tracker</h1><div id="sideBarLogin"><div><h3>Login:</h3><form action="login.php" method="post"><br><label for="Uname">Username:</label><br><input type="text" name="Uname"><br><br><label for="Pword">Password:</label><br><input type="password" name="Pword"><br><br><input type="submit"></form></div></div>';
	
			$mainContentString = '<div id="mainContent"><div><div>Invalid Login.</div></div></div>';
			echo $sideBarLoggedInString.$mainContentString;
		}
	?>
</body>
</html>