<!DOCTYPE html>
<html>
<head>
    <title>Inventory Tracker</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php
	$sideBarString = '<h1>Inventory Tracker</h1><div id="sideBar"><br><a href="inventorypage.php"><button>Inventory</button></a><br><br><a href="newLocationGet.php"><button>New Location</button></a><br><br><a href="newStoreGet.php"><button>New Store</button></a><br><br></div>';
	
	$sideBarLoggedInString = '<h1>Inventory Tracker</h1><div id="sideBarLogin"><div><h3>Login:</h3><form action="login.php" method="post"><br><label for="Uname">Username:</label><br><input type="text" name="Uname"><br><br><label for="Pword">Password:</label><br><input type="password" name="Pword"><br><br><input type="submit"></form></div></div>';
	
	//check to see if logged in here
	
	echo $sideBarLoggedInString;
?>

</body>
</html>
