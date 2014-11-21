<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Neil Wakely | Developer</title>
	<link rel="stylesheet" href="./css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
<a href="./" id="logo">
	<h1 class="name">Rev Neil Wakely</h1>
	<h2 class="developer">Developer</h2>
</a>
<nav>
<ul>
	<?php 
		$page="php"; // Change to reflect current page
		include 'menu.php';
	?>
</ul>
</nav>
</header>
<div id="wrapper">
<section>
<!-- Section code goes here -->
</section>
<footer>
	<a href="http://twitter.com/GuruComputersUK">
		<img src="./img/twitter-wrap.png" alt="Twitter Logo" class="social-icon">
	</a>
	<a href="http://facebook.com/RobotixMaster">
		<img src="./img/facebook-wrap.png" alt="Facebook Logo" class="social-icon">
	</a>
	<?php
		$start=2014;
		$current=date("Y");
		$cy="";
		if ($current=$start) {
			$cy=$start;
		}
		if ($current>$start) {
			$cy=$start."-".$current;
		}
		echo "<p>&copy;"." ".$cy." Neil Wakely.</p>"."\n";
	?>
</footer>
</div>
</body>
</html>