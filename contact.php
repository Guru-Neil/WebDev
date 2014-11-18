<!DOCTYPE html>
<html>
<head>
	<meta charset=\"utf-8\">
	<title>Neil Wakely | Developer</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<a href="index.php" id="logo">
			<h1 class="name">Rev Neil Wakely</h1>
			<h2 class="developer">Developer</h2>
		</a>
		<nav>
			<ul>
				<?php 
					$page="contact";
					if ($page == "home") {
						echo '<li><a href="index.php" class="selected">Portfolio</a></li>';
					} else {
						echo '<li><a href="index.php">Portfolio</a></li>';
					}
					
					if ($page == "about") {
						echo '<li><a href="about.php" class="selected">About</a></li>';
					} else {
						echo '<li><a href="about.php">About</a></li>';
					}
					
					if ($page == "contact") {
						echo '<li><a href="contact.php" class="selected">Contact</a></li>';
					} else {
						echo '<li><a href="contact.php">Contact</a></li>';
					} 
				?>
			</ul>
		</nav>
	</header>
	<div id="wrapper">
		<section id="primary">
			<h3>General Information</h3>
			<p>I am always looking for new challenges and love helping others solve problems.</p>
			<p>Please only use phone contact for urgent inquiries, email is the best way to contact me.</p>
		</section>
		<section id="secondary">
			<h3>Contact Details</h3>
			<ul class="contact-info">
				<li class="phone">
					<a href="tel:07942-759739">07942-759739</a>
				</li>
				<li class="mail">
					<a href="mailto:neil@gurucomputers.co.uk">neil@gurucomputers.co.uk</a>
				</li>
				<li class="twitter">
					<a href="http://twitter.com/intent/tweet?screen_name=GuruComputersUK">@GuruComputersUK</a>
				</li>
			</ul>
		</section>
		<footer>
			<a href="http://twitter.com/GuruComputersUK">
				<img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon">
			</a>
			<a href="http://facebook.com/RobotixMaster">
				<img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon">
			</a>
			<p>&copy; 2014 Neil Wakely.</p>
		</footer>
	</div>
</body>
</html>
