<!DOCTYPE html>

<html lang="en">
<head>
	<title>Apple Festival</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/mobile.css">
	<link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
	<script src="js/pic.js"></script>
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
		<span class="nav_span clicked">Gallery</span>
		<span class="nav_span"><a href="direction.php">Directions</a></span>
	</div><!-- end of nav_bar div -->
</div><!-- end of header div -->

<div id="container">

<div id="content">
	<div id="Main">

	<h2>Apple Fest Gallery</h2>
	<div id="gallery_container">
		<img src="images/food2.jpg" alt="food" id="galleryimg">
		<!--
		food2.jpg from http://ambassadors.as.cornell.edu/category/uncategorized/
		food3.jpg from http://www.ithacajournal.com/story/news/local/2016/09/30/apple-harvest-festival-returns-ithaca/91328534/
		food4.jpg from https://theithacan.org/media/apples-to-apples-annual-apple-harvest-festival-brings-thousands-to-the-commons-2/
		-->
	</div><!--end of gallery_container div-->
	
	<div id="button_container">
    <button onclick="picGallery(-1)" id="leftb">Previous</button>
    <button onclick="picGallery(1)" id="rightb">Next</button>
    </div> <!--end of button_container div-->
		
	</div><!-- end of Main div -->
</div><!-- end of content div -->

</div><!-- end of container div -->

<?php
	include 'includes/footer.php';
?>

</body>
</html>