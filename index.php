<!DOCTYPE html>

<html lang="en">
<head>
	<title>Apple Festival</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="stylesheet" type="text/css" href="styles/mobile.css">
	<link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/text.js"></script>
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
		<span class="nav_span clicked">Home</span>
		<span class="nav_span"><a href="about.php">About</a></span>
		<span class="nav_span"><a href="gallery.php">Gallery</a></span>
		<span class="nav_span"><a href="direction.php">Directions</a></span>
	</div><!-- end of nav_bar div -->
</div><!-- end of header div -->

<div id="container">

<div id="content">
	<div id="Main">

	<div id="juggling">
		<img src="images/applefest1.jpg" id="jugglingpic" alt="juggling">
		<!-- Found at http://www.zap-ed-news.com/wp-content/uploads/2014/10/52e7ef4ba09c1.jpg -->
	</div><!-- end of juggling div -->
	
	<table>
		<tr>
			<th><img src="images/activities.png" alt="activities" id="1"></th>
			<!-- Found at http://www.eventcrazy.com/event/photos/352755_1_51_091611_115330.jpg -->
			<th><img src="images/food.png" alt="food" id="2"></th>
			<!-- Found at http://www.zap-ed-news.com/wp-content/uploads/2014/10/10685421_10154664995420576_1846178322996152441_n-771x578.jpg -->
			<th><img src="images/entertainment.png" alt="entertainment" id="3"></th>
			<!-- Found at http://www.ithaca.edu/depts/gallery_img/16036_full.jpg -->
		</tr>
		<tr>
			<th>Activities</th>
			<th>Food</th>
			<th>Entertainment</th>
		</tr>
	</table>

	<p id="indextext">
		The Apple Harvest Festival, better known as Apple Fest, is a weekend-long experience that takes place every fall! The festival offers delicious food offerings from over 100 local vendors. There are caramel apples and cotton candy for the kinds, and hard cider tastings for the parents! In addition to the delectable bites, there is family entertainment at every turn, games, rides, prizes, and live performances on two stages. While kids have fun petting the goats, parents can shop around for home decor or other handmade artisan goods. With so many offerings for adults and kids, Apple Fest is a perfect outing for the whole family. Bring your kids and experience the fun for yourself this fall! 
	</p>

	<p id="activitiesP">
		<span class="large">Description</span>
		Apple Fest has many activities that will keep you having fun all day long. Laughing Goat Fiber Farm comes back every year and brings its adorable goats to pet. This is a favorite among kids. There is a specific entertainment area on West State Street where kids games and carnival rides are offered. Some activities that kids will enjoy are the fun house, merry-go-round, carnival games, and face painting. While the kids are having fun getting their faces painted, parents can walk along Cayuga Street to explore the many artisan crafts. There are many home décor items and beautiful jewelry pieces on display every year.
		<button class="back">Back.</button>
	</p>

	<p id="foodP">
		<span class="large">Description</span>
		There is a wide variety of delicious culinary offerings at Apple Fest that appeal to adults and kids alike. There are more than 20 local farmers who sell fall favorite such as apples, cider, maple products, and other delectable seasonal produce and baked goods. Each year there are plenty of old favorites as well as new offerings. As you walk through Apple Fest, you won’t be able to resist the sweet potato pies, tangy pepper jams, and freshly baked cookies. Littletree Orchards is a crowd favorite and returns each year with their famous apple cider doughnuts. Parents will enjoy the hard cider tastings and can buy a bottle of wine or specialty beer to take home. Kids can satisfy their sweet tooth with caramel apples, kettle corn, and cotton candy. In addition to the snacks scattered all around Apple Fest, there are more food vendors that serve up delicious lunch dishes to suit every palate. Parents can indulge by exploring different cultural delicacies such as pad thai or curry chicken, while kids can enjoy many fair foods such as French fries and hot dogs.
		<button class="back">Back.</button>
	</p>

	<p id="entertainmentP">
		<span class="large">Description</span>
		There are acts going on throughout the day that perform on the Bernie Milton Stage. The acts are perfect for when you need a break from eating! They are all a delight to sit, watch, and listen to. Punk Hands is a band that performs each year and is a crowd favorite. In addition, local Cornell University students display their talents. Some a capella groups form Ithaca College, Premium Blend and Voicestream, take the stage to impress the Apple Fest goers. In addition to the acts that adults will enjoy, kids have many entertainment options available to them. Family-friendly performers such as Farmer Tom and Hilby the Juggler are a favorite among children. Kids also are a big fan of the balloon animal maker.
		<button class="back">Back.</button>
	</p>
		
	</div><!-- end of Main div -->
</div><!-- end of content div -->

</div><!-- end of container div -->

<?php
	include 'includes/footer.php';
?>

</body>
</html>