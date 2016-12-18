<!DOCTYPE html>

<html lang="en">
<head>
	<title>Apple Festival</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/mobile.css">
	<link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="header">
	<div id="banner">
		<img src="images/banner.jpeg" alt="Autumn leaves">
		<h1>Apple Festival</h1>
		<!-- Found at http://www.keyword-suggestions.com/YXV0dW1uIGdyYXBoaWNz/> -->
	</div><!-- end of banner div -->
	
	<div id="nav_bar">
		<span class="nav_span"><a href="index.php">Home</a></span>
		<span class="nav_span"><a href="about.php">About</a></span>
		<span class="nav_span"><a href="gallery.php">Gallery</a></span>
		<span class="nav_span clicked">Directions</span>
	</div><!-- end of nav_bar div -->
</div><!-- end of header div -->

<div id="container">

<div id="content">
	<h2>Directions</h2>

	<div id="Main">
	<h3>How do I get to Apple Fest?</h3>
	<p>Apple Fest in the Downtown Ithaca Commons is accessible via car, bus, and foot.
	<h3>Where can I park?</h3>
	<ul>
		<li>Seneca Garage (at the corner of Tioga St. and Seneca St.)</li>
		<li>Green St. Garage (on E. Green St.)</li>
		<li>Cayuga Garage (on S. Cayuga St.)</li>
	</ul>
	</div><!-- end of Main div -->
	<div id="mapcontainer">
		<img src="images/map.jpg" alt="apple fest map" id="mapimg">
		<!--Found at http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust-->
	</div><!-- end of mapcontainer div -->
</div><!-- end of content div -->

</div><!-- end of container div -->

<?php
	include 'includes/footer.php';
?>

</body>
</html>