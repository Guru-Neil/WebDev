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
		$page="home"; // Change to reflect current page
		include 'menu.php';
	?>
</ul>
</nav>
</header>
<div id="wrapper">
<section>
<!-- Gallery -->
<div class="gallery">
<center>
<table width="100%">
<?php
	$table = array("html", "css", "php", "python", "ruby", "ios", "android", "c", "cpp", "dotnet", "java", "javascript", " ", "snippets", " ");
	$title = array("HyperText Markup Language", "Cascading Style Sheets", "", "", "Ruby On Rails", "iPhone Operating System", "", "", "C++", ".NET", "", "", "Misc Code Snippets");
	$test=count($table)-1;
	for ($x = 0; $x <= $test; $x=$x+3) {
		if ($table[$x]== " "){
			echo '<tr><td width="33%"></td>';
		} else {
			echo '<tr><td width="33%"><a href="'.$table[$x].'.php" title="'.$title[$x].'"><img src="./img/'.$table[$x].'.png"></a></td>';
		}
    	if ($table[$x+1]== " "){
			echo '<tr><td width="33%"></td>';
		} else {
			echo '<td width="33%"><a href="'.$table[$x+1].'.php" title="'.$title[$x+1].'"><img src="./img/'.$table[$x+1].'.png"></a></td>';
		}
		if ($table[$x+2]== " "){
			echo '<tr><td width="33%"></td>';
		} else {
			echo '<td width="33%"><a href="'.$table[$x+2].'.php" title="'.$title[$x+2].'"><img src="./img/'.$table[$x+2].'.png"></a></td>';
		}
	} 
?>
</table>
</center>
</div>
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
