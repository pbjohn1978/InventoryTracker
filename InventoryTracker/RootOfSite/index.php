<!DOCTYPE html>
<html>
<head>
    <title>Inventory Tracker</title>
	<meta charset="utf-8" />
</head>
<body>
<a href="inventorypage.php">inventory page - WE WILL DELETE THIS LINK IN LATER VERSIONS... :)</a>
<?php
	include 'script/functions.php';
	display_head();

	include 'header.php';?>

	<div id="carousel-container">
		<!--carousel goes here-->
		<ul id="carousel">
			<li><img src="<?php echo $document_path ?>images/batman.png" alt""/></li>
		</ul>
	</div>

	<div class="wrapper">
		<!--content goes here -->
		<?php include 'footer.php';?>
	</div>
    
	<script type="text/javascript" language="javascript" src="'.$document_path .'script/js/jquery.roundabout.min.js">
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
		var carousel = $('#carousel').hide();
			carousel.roundabout({autoplay:true, autoplayDuration:6000});
			carousel.show();
	});
?>
</body>
</html>
