<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
    <style>
    	td{
			border:groove;
			padding:3px 5px 3px 5px;
		}
    </style>
</head>
<body>
	<?php
		$servername = "";
		$username = "";
		$password = "";
		$dbname = "InventoryTrackerCptc";
		$sql = "SELECT Item.ItemID ,Item.ItemName ,Store.StoreName ,Item.ItemUnitPrice ,Item.ItemQuantityPerBox ,Item.ItemTotalCount ,ItemLocation.ItemLocationName FROM Item INNER JOIN Store on Item.StoreID = Store.StoreID INNER JOIN ItemLocation on Item.ItemLocationID = ItemLocation.ItemLocationID";
		$outputString = "0 results";
		
		//Create the Connection
		$con = mysqli_connect($servername, $username, $password, $dbname);
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		//Run the Query...
		$result = mysqli_query($con, $sql);
		
		//Process the results to a string for output
		if (mysqli_num_rows($result) > 0) {
			$outputString = "<table><tr><td>Item ID</td><td>Item Name</td><td>Vendor</td><td>Item Unit Price</td><td>Item Quantity Per Box</td><td>Item Total Count</td><td>Location</td></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				$outputString = $outputString."<tr>".		"<td>".$row["ItemID"]."</td><td>".$row["ItemName"]."</td><td>".$row["StoreName"]."</td><td>".$row["ItemUnitPrice"]."</td><td>".$row["ItemQuantityPerBox"]."</td><td>".$row["ItemTotalCount"]."</td><td>".$row["ItemLocationName"]."</td></tr>";
			}
			$outputString = $outputString."</table>";
		}
		
		echo $outputString."<br>";
		
		//close the connection to server
		$con->close();
	?>
</body>
</html>
